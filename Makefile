VERSION		= $(shell node -p 'require("./composer.json").version')

all:		build

prepare:

build:
	composer install

test:
	composer validate

clean:
	rm -rf vendor

distclean:	clean

publish:	clean build test pristine
	rm -rf onslip-360-php-sdk && git clone git@github.com:Onslip/onslip-360-php-sdk.git
	cp -a $$(git ls-files) onslip-360-php-sdk
	cd onslip-360-php-sdk && git add -A && git commit -m "Version $(VERSION)" && git tag -s -m "Version $(VERSION)" $(VERSION) && git push --follow-tags

pristine:
	@[[ -z "$$(git status --porcelain .)" ]] || (git status .; false)

.PHONY:		all prepare build clean distclean publish
