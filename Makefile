VERSION		= $(shell node -p 'require("./composer.json").version')
PHPDOCARGS	= -f API.php -f Hawk.php -f Onslip360.php --visibility public --defaultpackagename SDK --title onslip/onslip-360-api --quiet

all:		build docs

prepare:	phpDocumentor.phar
	composer update && composer install

build:		prepare
	composer validate

docs:	build
	rm -rf docs
	./phpDocumentor.phar $(PHPDOCARGS) -t docs/html/
	./phpDocumentor.phar $(PHPDOCARGS) -t docs/md/ --template vendor/saggre/phpdocumentor-markdown/themes/markdown/
	echo "PHP Global Class." > docs/md/classes/JsonSerializable.md
	echo "PHP Global Class." > docs/md/classes/Exception.md

phpDocumentor.phar:
	curl -OLs https://github.com/phpDocumentor/phpDocumentor/releases/download/v3.5.0/phpDocumentor.phar
	chmod +x $@

test:
	composer validate

clean:
	rm -rf docs vendor

distclean:	clean
	rm -rf .phpdoc phpDocumentor.phar

publish:	clean build test pristine
	echo $(VERSION) | grep -Fqv beta
	rm -rf onslip-360-php-sdk && git clone git@github.com:Onslip/onslip-360-php-sdk.git
	cp -a .gitignore LICENSE Makefile *.json *.php onslip-360-php-sdk
	cd onslip-360-php-sdk && git add -A && git commit -m "Version $(VERSION)" && git tag -s -m "Version $(VERSION)" $(VERSION) && git push --follow-tags

pristine:
	@[[ -z "$$(git status --porcelain .)" ]] || (git status .; false)

.PHONY:		all prepare build docs clean distclean publish
