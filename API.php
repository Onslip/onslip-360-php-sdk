<?php declare(strict_types=1);

namespace Onslip360\API\AccessToken {
	enum Type: string {
		case HAWK_KEY = 'hawk-key';
		case ACCESS_TOKEN = 'access-token';
		case PKCS12 = 'pkcs12';
	}
}

namespace Onslip360\API\Batch {
	enum Type: string {
		case OPEN = 'open';
		case CLOSE = 'close';
		case CHANGE = 'change';
	}
}

namespace Onslip360\API\ButtonMapItem {
	enum Action: string {
		case ADD_PRODUCT_ITEM = 'add-product-item';
		case DISPLAY_BUTTON_MAP = 'display-button-map';
		case DISPLAY_PARENT_BUTTON_MAP = 'display-parent-button-map';
		case DISPLAY_PREVIOUS_PAGE = 'display-previous-page';
		case DISPLAY_NEXT_PAGE = 'display-next-page';
		case ADD_TAB_DISCOUNT = 'add-tab-discount';
		case OPEN_URI = 'open-uri';
	}

	enum DiscountType: string {
		case PERCENTAGE = 'percentage';
		case FIXED_AMOUNT = 'fixed-amount';
	}
}

namespace Onslip360\API\ButtonMap {
	enum Theme: string {
		case CLASSIC = 'classic';
		case MODERN = 'modern';
	}

	enum Type: string {
		case TABLET_GROUPS = 'tablet-groups';
		case TABLET_BUTTONS = 'tablet-buttons';
		case PHONE_BUTTONS = 'phone-buttons';
		case MENU = 'menu';
		case MENU_SECTION = 'menu-section';
	}
}

namespace Onslip360\API\Campaign {
	enum Type: string {
		case PERCENTAGE = 'percentage';
		case FIXED_AMOUNT = 'fixed-amount';
		case FIXED_PRICE = 'fixed-price';
		case CHEAPEST_FREE = 'cheapest-free';
		case TAB_PERCENTAGE = 'tab-percentage';
		case TAB_FIXED_AMOUNT = 'tab-fixed-amount';
	}
}

namespace Onslip360\API\CardMetadata {
	enum Status: string {
		case APPROVED_ONLINE = 'approved-online';
		case APPROVED_OFFLINE = 'approved-offline';
		case FAILED = 'failed';
		case CANCELLED = 'cancelled';
		case TECHNICAL_ERROR = 'technical-error';
		case LOCALLY_DENIED = 'locally-denied';
		case ISSUER_DENIED = 'issuer-denied';
		case ISSUER_UNAVAILABLE = 'issuer-unavailable';
		case ONLINE_REQUIRED = 'online-required';
		case SIGNATURE_REQUIRED = 'signature-required';
		case UPDATE_REQUIRED = 'update-required';
		case CARD_BLOCKED = 'card-blocked';
		case SNF_FULL = 'snf-full';
		case CASHBACK_FORBIDDEN = 'cashback-forbidden';
		case INVALID_MAC = 'invalid-mac';
		case NETWORK_ERROR = 'network-error';
		case INVALID_CARD = 'invalid-card';
		case MISMATCH = 'mismatch';
	}

	enum TransactionType: string {
		case LOGON = 'logon';
		case CLOSE_BATCH = 'close-batch';
		case PURCHASE = 'purchase';
		case PURCHASE_REVERSAL = 'purchase-reversal';
		case REFUND = 'refund';
		case REFUND_REVERSAL = 'refund-reversal';
	}
}

namespace Onslip360\API\CardReceiptMetadata {
	enum CardAccount: string {
		case DEBIT = 'debit';
		case CREDIT = 'credit';
	}

	enum EntryMode: string {
		case CHIP = 'chip';
		case MAGSTRIPE = 'magstripe';
		case MANUAL = 'manual';
		case CONTACTLESS = 'contactless';
	}

	enum VerificationMethod: string {
		case NONE = 'none';
		case SIGNATURE = 'signature';
		case ONLINE_PIN = 'online-pin';
		case OFFLINE_PIN = 'offline-pin';
		case OFFLINE_PIN_AND_SIGNATURE = 'offline-pin-and-signature';
		case CVM_NOT_REQUIRED = 'cvm-not-required';
		case CVM_NOT_PERFORMED = 'cvm-not-performed';
		case CVM_FAILED = 'cvm-failed';
	}
}

namespace Onslip360\API\CardTransaction {
	enum Type: string {
		case CARD_RECEIPT = 'card-receipt';
		case CARD_BATCH_SUMMARY = 'card-batch-summary';
	}
}

namespace Onslip360\API\CashDrawer {
	enum Type: string {
		case OPEN = 'open';
		case CLOSE = 'close';
	}
}

namespace Onslip360\API\Cert {
	enum Type: string {
		case CLIENT = 'client';
		case USER = 'user';
	}
}

namespace Onslip360\API\CloudControlUnit {
	enum Type: string {
		case GREEN_GATE = 'green-gate';
		case TAX_CLOUD = 'tax-cloud';
	}
}

namespace Onslip360\API\CompanyFeature {
	enum Flag: string {
		case ARCHIVED_ACCOUNT = 'archived-account';
		case CONTROL_UNIT_NOT_REQUIRED = 'control-unit-not-required';
		case DEMO_ACCOUNT = 'demo-account';
		case RESTRICTED_VERSION = 'restricted-version';
		case AUTO_CLOSE_BATCH = 'auto-close-batch';
		case BARCODE_SCANNERS = 'barcode-scanners';
		case CAMPAIGNS = 'campaigns';
		case CLOUD_CONTROL_UNIT = 'cloud-control-unit';
		case COUPON_VOUCHERS = 'coupon-vouchers';
		case CUSTOM_PAYMENT_METHODS = 'custom-payment-methods';
		case DIGITAL_RECEIPT_SMS = 'digital-receipt-sms';
		case DIRECT_MARKETING_CAMPAIGNS = 'direct-marketing-campaigns';
		case ENTERTAINMENT_BILLS = 'entertainment-bills';
		case ERP_BL = 'erp-bl';
		case ERP_FORTNOX = 'erp-fortnox';
		case ERP_PERSONALKOLLEN = 'erp-personalkollen';
		case ERP_PLANDAY = 'erp-planday';
		case ERP_VISMA = 'erp-visma';
		case ERP_ZOINED = 'erp-zoined';
		case FOREIGN_CURRENCIES = 'foreign-currencies';
		case HOST2T_TERMINALS = 'host2t-terminals';
		case KITCHEN_TICKETS = 'kitchen-tickets';
		case PAYMENT_SWISH = 'payment-swish';
		case PAYMENT_VOUCHERS = 'payment-vouchers';
		case SHIFTS = 'shifts';
		case STOCK_BALANCES = 'stock-balances';
		case TABLE_SERVICE = 'table-service';
		case TAKE_OUT_ORDERS = 'take-out-orders';
		case VERIFONE_TERMINALS = 'verifone-terminals';
		case VIVA_WALLET_TERMINALS = 'viva-wallet-terminals';
		case WISEPAY_TERMINALS = 'wisepay-terminals';
	}
}

namespace Onslip360\API\Company {
	enum Category: string {
		case ACTIVE_LIFE = 'active-life';
		case ARTS_AND_ENTERTAINMENT = 'arts-and-entertainment';
		case AUTOMOTIVE = 'automotive';
		case BEAUTY_AND_SPAS = 'beauty-and-spas';
		case EDUCATION = 'education';
		case EVENT_SERVICES = 'event-services';
		case FOOD = 'food';
		case HEALTH_AND_MEDICAL = 'health-and-medical';
		case HOME_SERVICES = 'home-services';
		case HOTELS_AND_TRAVEL = 'hotels-and-travel';
		case LOCAL_SERVICES = 'local-services';
		case NIGHTLIFE = 'nightlife';
		case OTHER = 'other';
		case PETS = 'pets';
		case PROFESSIONAL_SERVICES = 'professional-services';
		case PUBLIC_SERVICES = 'public-services';
		case RELIGIOUS_ORGANIZATIONS = 'religious-organizations';
		case RESTAURANTS = 'restaurants';
		case SHOPPING = 'shopping';
	}

	enum RegistrationType: string {
		case BACKOFFICE = 'backoffice';
		case ANDROID_TABLET = 'android-tablet';
		case ANDROID_PHONE = 'android-phone';
		case IOS_TABLET = 'ios-tablet';
		case IOS_PHONE = 'ios-phone';
	}

	enum Type: string {
		case MERCHANT = 'merchant';
		case RESELLER = 'reseller';
	}
}

namespace Onslip360\API\CustomerFeedbackParams {
	enum Mood: string {
		case HAPPY = 'happy';
		case SAD = 'sad';
	}
}

namespace Onslip360\API\Customer {
	enum Type: string {
		case INDIVIDUAL = 'individual';
		case ORGANIZATION = 'organization';
	}
}

namespace Onslip360\API\DMCampaignRecipient {
	enum Status: string {
		case DELIVERED = 'delivered';
		case FAILED = 'failed';
		case SENT = 'sent';
	}
}

namespace Onslip360\API\DMCampaign {
	enum Status: string {
		case STARTED = 'started';
		case DONE = 'done';
		case FAILED = 'failed';
	}

	enum Type: string {
		case SMS = 'sms';
	}
}

namespace Onslip360\API\DataObjectOperation {
	enum Operation: string {
		case CREATE = 'create';
		case UPDATE = 'update';
		case DELETE = 'delete';
	}
}

namespace Onslip360\API\DataObjectReport {
	enum Type: string {
		case REVISIONS = 'revisions';
	}
}

namespace Onslip360\API\DigitalReceipt {
	enum Status: string {
		case DELIVERED = 'delivered';
		case FAILED = 'failed';
		case SENT = 'sent';
	}

	enum Type: string {
		case RECEIPT = 'receipt';
		case CARD_TRANSACTION = 'card-transaction';
	}
}

namespace Onslip360\API\ERPAction {
	enum Type: string {
		case BL = 'bl';
		case FORTNOX = 'fortnox';
		case PERSONALKOLLEN = 'personalkollen';
		case PLANDAY = 'planday';
		case VISMA = 'visma';
		case ZOINED = 'zoined';
	}
}

namespace Onslip360\API\EventStream {
	enum State: string {
		case PENDING = 'pending';
		case ACTIVE = 'active';
	}
}

namespace Onslip360\API\InventoryAdjustment {
	enum Type: string {
		case INCOMING = 'incoming';
		case OUTGOING = 'outgoing';
		case RECONCILIATION = 'reconciliation';
	}
}

namespace Onslip360\API\KeySpecification {
	enum Algorithm: string {
		case RSA = 'rsa';
	}
}

namespace Onslip360\API\MQRecord {
	enum Type: string {
		case DATA_OBJECT_EVENT = 'data-object-event';
		case SCHEDULED_EVENT = 'scheduled-event';
		case MANUAL_ACTION = 'manual-action';
		case RETRY_TRIGGER_EVENT = 'retry-trigger-event';
		case CANCEL_TRIGGER_EVENT = 'cancel-trigger-event';
	}
}

namespace Onslip360\API\Metadata {
	enum Type: string {
		case PAYMENT_VOUCHER = 'payment-voucher';
		case COUPON_VOUCHER = 'coupon-voucher';
		case CARD_RECEIPT = 'card-receipt';
		case SWISH_TRANSACTION = 'swish-transaction';
		case CURRENCY = 'currency';
		case PRE_PAID = 'pre-paid';
	}
}

namespace Onslip360\API\OrderTicket {
	enum Type: string {
		case KITCHEN = 'kitchen';
	}
}

namespace Onslip360\API\Order {
	enum State: string {
		case REQUESTED = 'requested';
		case BOOKED = 'booked';
		case ACTIVE = 'active';
		case SHIPPED = 'shipped';
		case FULFILLED = 'fulfilled';
		case CANCELLED = 'cancelled';
	}

	enum Type: string {
		case TAKE_OUT = 'take-out';
	}
}

namespace Onslip360\API\PaymentMethod {
	enum Type: string {
		case CASH = 'cash';
		case CARD = 'card';
		case CREDIT = 'credit';
		case CUSTOM = 'custom';
		case CURRENCY = 'currency';
		case PAYMENT_VOUCHER = 'payment-voucher';
		case SWISH = 'swish';
		case WEIQ = 'weiq';
	}
}

namespace Onslip360\API\Peripheral {
	enum PeripheralFunction: string {
		case BARCODE_SCANNER = 'barcode-scanner';
		case CARD_TERMINAL = 'card-terminal';
		case CASH_DRAWER = 'cash-drawer';
		case CONTROL_UNIT = 'control-unit';
		case CUSTOMER_DISPLAY = 'customer-display';
		case KITCHEN_PRINTER = 'kitchen-printer';
		case KITCHEN_PRINTER_2 = 'kitchen-printer-2';
		case KITCHEN_PRINTER_3 = 'kitchen-printer-3';
		case KITCHEN_PRINTER_4 = 'kitchen-printer-4';
		case KITCHEN_PRINTER_5 = 'kitchen-printer-5';
		case RECEIPT_PRINTER = 'receipt-printer';
		case HOST2T = 'host2t';
	}
}

namespace Onslip360\API {
	enum Permission: string {
		case REBUILD_DB_INDEX = 'rebuild-db-index';
		case SEND_EMAILS = 'send-emails';
		case SHOW_DAILY_PASSWORD = 'show-daily-password';
		case SHOW_BUTTONS = 'show-buttons';
		case EDIT_BUTTONS = 'edit-buttons';
		case SHOW_BUTTON_MAPS = 'show-button-maps';
		case EDIT_BUTTON_MAPS = 'edit-button-maps';
		case SHOW_COMPANIES = 'show-companies';
		case EDIT_COMPANIES = 'edit-companies';
		case EDIT_COMPANY_INFO = 'edit-company-info';
		case TERMINATE_COMPANY = 'terminate-company';
		case SHOW_COMPANY_CONFIG = 'show-company-config';
		case EDIT_COMPANY_CONFIG = 'edit-company-config';
		case SHOW_LABELS = 'show-labels';
		case EDIT_LABELS = 'edit-labels';
		case SHOW_RECORDS = 'show-records';
		case ADD_RECORDS = 'add-records';
		case EDIT_RECORDS = 'edit-records';
		case SHOW_PRODUCT_GROUPS = 'show-product-groups';
		case EDIT_PRODUCT_GROUPS = 'edit-product-groups';
		case SHOW_PRODUCTS = 'show-products';
		case EDIT_PRODUCTS = 'edit-products';
		case SHOW_TABS = 'show-tabs';
		case EDIT_TABS = 'edit-tabs';
		case SHOW_TILLS = 'show-tills';
		case EDIT_TILLS = 'edit-tills';
		case BIND_TILLS = 'bind-tills';
		case BIND_CONTROL_UNIT = 'bind-control-unit';
		case EDIT_TILL_CONFIG = 'edit-till-config';
		case SHOW_USERS = 'show-users';
		case EDIT_USERS = 'edit-users';
		case EDIT_PERSONAL_INFO = 'edit-personal-info';
		case SHOW_CUSTOMERS = 'show-customers';
		case EDIT_CUSTOMERS = 'edit-customers';
		case SHOW_CERTS = 'show-certs';
		case ADD_CERTS = 'add-certs';
		case EDIT_CERTS = 'edit-certs';
		case SHOW_LOCATIONS = 'show-locations';
		case EDIT_LOCATIONS = 'edit-locations';
		case SHOW_ACCOUNTS = 'show-accounts';
		case EDIT_ACCOUNTS = 'edit-accounts';
		case SHOW_PAYMENT_METHODS = 'show-payment-methods';
		case EDIT_PAYMENT_METHODS = 'edit-payment-methods';
		case SHOW_VOUCHERS = 'show-vouchers';
		case USE_VOUCHERS = 'use-vouchers';
		case EDIT_VOUCHERS = 'edit-vouchers';
		case ADMIN_VOUCHERS = 'admin-vouchers';
		case SHOW_ROLES = 'show-roles';
		case EDIT_ROLES = 'edit-roles';
		case SHOW_TRIGGER_EVENTS = 'show-trigger-events';
		case EDIT_TRIGGER_EVENTS = 'edit-trigger-events';
		case ADMIN_TRIGGER_EVENTS = 'admin-trigger-events';
		case RUN_REPORT_JOBS = 'run-report-jobs';
		case SHOW_TRIGGERS = 'show-triggers';
		case EDIT_TRIGGERS = 'edit-triggers';
		case USE_TRIGGERS = 'use-triggers';
		case SHOW_ACCESS_TOKENS = 'show-access-tokens';
		case EDIT_ACCESS_TOKENS = 'edit-access-tokens';
		case USE_ACCESS_TOKENS = 'use-access-tokens';
		case ADMIN_ACCESS_TOKENS = 'admin-access-tokens';
		case SHOW_PERIPHERALS = 'show-peripherals';
		case EDIT_PERIPHERALS = 'edit-peripherals';
		case SHOW_STOCK_BALANCES = 'show-stock-balances';
		case EDIT_STOCK_BALANCES = 'edit-stock-balances';
		case ADMIN_STOCK_BALANCES = 'admin-stock-balances';
		case SHOW_INVENTORY_ADJUSTMENTS = 'show-inventory-adjustments';
		case EDIT_INVENTORY_ADJUSTMENTS = 'edit-inventory-adjustments';
		case SHOW_RESOURCES = 'show-resources';
		case EDIT_RESOURCES = 'edit-resources';
		case SHOW_ORDERS = 'show-orders';
		case EDIT_ORDERS = 'edit-orders';
		case SHOW_CAMPAIGNS = 'show-campaigns';
		case EDIT_CAMPAIGNS = 'edit-campaigns';
		case SHOW_PRODUCT_MODIFIERS = 'show-product-modifiers';
		case EDIT_PRODUCT_MODIFIERS = 'edit-product-modifiers';
		case SHOW_PRIV_PORT_TOKENS = 'show-priv-port-tokens';
		case EDIT_PRIV_PORT_TOKENS = 'edit-priv-port-tokens';
		case SHOW_SWISH_TRANSACTIONS = 'show-swish-transactions';
		case EDIT_SWISH_TRANSACTIONS = 'edit-swish-transactions';
		case USE_SWISH_TRANSACTIONS = 'use-swish-transactions';
		case ADMIN_SWISH_TRANSACTIONS = 'admin-swish-transactions';
		case USE_CLOUD_CONTROL_UNIT = 'use-cloud-control-unit';
		case SHOW_DIRECT_MARKETING_CAMPAIGNS = 'show-direct-marketing-campaigns';
		case ADMIN_DIRECT_MARKETING_CAMPAIGNS = 'admin-direct-marketing-campaigns';
		case EDIT_DIRECT_MARKETING_CAMPAIGNS = 'edit-direct-marketing-campaigns';
		case SEND_DIRECT_MARKETING_CAMPAIGNS = 'send-direct-marketing-campaigns';
		case SHOW_DIGITAL_RECEIPT_RECEIPIENTS = 'show-digital-receipt-receipients';
		case EDIT_DIGITAL_RECEIPT_RECEIPIENTS = 'edit-digital-receipt-receipients';
		case SHOW_DIGITAL_RECEIPTS = 'show-digital-receipts';
		case EDIT_DIGITAL_RECEIPTS = 'edit-digital-receipts';
		case SEND_DIGITAL_RECEIPTS = 'send-digital-receipts';
		case ADMIN_SYSTEM_CONFIG = 'admin-system-config';
		case SHOW_SHORT_URIS = 'show-short-uris';
		case EDIT_SHORT_URIS = 'edit-short-uris';
		case USE_PIN_RESET = 'use-pin-reset';
		case SHOW_SHIFTS = 'show-shifts';
		case EDIT_SHIFTS = 'edit-shifts';
		case ADMIN_SHIFTS = 'admin-shifts';
		case USE_SHIFTS = 'use-shifts';
		case SHOW_MERCHANTS = 'show-merchants';
		case EDIT_MERCHANTS = 'edit-merchants';
		case SHOW_COMPANY_SUMMARIES = 'show-company-summaries';
		case EDIT_COMPANY_SUMMARIES = 'edit-company-summaries';
		case SHOW_MERCHANT_SUMMARIES = 'show-merchant-summaries';
		case SHOW_MQ_RECORD_SCHEDULES = 'show-mq-record-schedules';
		case EDIT_MQ_RECORD_SCHEDULES = 'edit-mq-record-schedules';
		case SHOW_EVENT_STREAMS = 'show-event-streams';
		case USE_EVENT_STREAMS = 'use-event-streams';
		case EDIT_EVENT_STREAMS = 'edit-event-streams';
		case USE_WEIQ_PAYMENT_METHODS = 'use-weiq-payment-methods';
	}
}

namespace Onslip360\API\ProductEntry {
	enum Type: string {
		case PRODUCT_CREATED = 'product-created';
		case PRODUCT_UPDATED = 'product-updated';
		case PRODUCT_DELETED = 'product-deleted';
		case PRODUCT_GROUP_CREATED = 'product-group-created';
		case PRODUCT_GROUP_UPDATED = 'product-group-updated';
		case PRODUCT_GROUP_DELETED = 'product-group-deleted';
	}
}

namespace Onslip360\API\ProductGroup {
	enum Type: string {
		case GOODS = 'goods';
		case SERVICES = 'services';
		case LIABILITIES = 'liabilities';
		case ADJUSTMENTS = 'adjustments';
		case CAMPAIGNS = 'campaigns';
		case DISCOUNTS = 'discounts';
		case DISCOUNT = 'discount';
	}
}

namespace Onslip360\API\ProductModifier {
	enum Type: string {
		case SINGLE_VALUE = 'single-value';
		case MULTIPLE_VALUES = 'multiple-values';
		case SINGLE_PRODUCT = 'single-product';
		case MULTIPLE_PRODUCTS = 'multiple-products';
		case PRODUCTS = 'products';
	}
}

namespace Onslip360\API\Product {
	enum Type: string {
		case COUPON = 'coupon';
		case COUPON_VOUCHER = 'coupon-voucher';
		case PAYMENT_VOUCHER = 'payment-voucher';
	}
}

namespace Onslip360\API\Receipt {
	enum Type: string {
		case SALE = 'sale';
		case RETURN = 'return';
		case CREDIT = 'credit';
	}
}

namespace Onslip360\API\Record {
	enum Type: string {
		case RECEIPT = 'receipt';
		case REPORT = 'report';
		case TAB = 'tab';
		case BATCH = 'batch';
		case CASH_DRAWER = 'cash-drawer';
		case PRODUCT_UPDATE = 'product-update';
		case USAGE = 'usage';
		case INVALID_PAYLOAD = 'invalid-payload';
		case CARD_TRANSACTION = 'card-transaction';
		case ORDER_TICKET = 'order-ticket';
		case ENTERTAINMENT_BILL = 'entertainment-bill';
	}
}

namespace Onslip360\API\ReportAction {
	enum Template: string {
		case SALES = 'sales';
		case SHIFTS = 'shifts';
		case STOCK_BALANCES = 'stock-balances';
		case VOUCHERS = 'vouchers';
		case Z_REPORT = 'z-report';
	}
}

namespace Onslip360\API\Report {
	enum Type: string {
		case X_REPORT = 'x-report';
		case Z_REPORT = 'z-report';
	}
}

namespace Onslip360\API\ResourceMapItem {
	enum Shape: string {
		case ELLIPSE = 'ellipse';
		case RECTANGLE = 'rectangle';
	}

	enum Type: string {
		case RESOURCE = 'resource';
	}
}

namespace Onslip360\API\SendEmailRequest {
	enum Template: string {
		case CUSTOMER_FEEDBACK = 'customer-feedback';
		case INIT_WEIQ_INTEGRATION = 'init-weiq-integration';
		case NEW_ACCOUNT_LOGIN_DETAILS = 'new-account-login-details';
		case PASSWORD_RESET_CHALLENGE = 'password-reset-challenge';
		case RESTRICTED_VERSION_WARNING = 'restricted-version-warning';
		case WELCOME_EMAIL = 'welcome-email';
		case REPORT_COVER = 'report-cover';
	}
}

namespace Onslip360\API\Shift {
	enum Status: string {
		case ACTIVE = 'active';
		case FINISHED = 'finished';
	}
}

namespace Onslip360\API\SwishTransaction {
	enum Status: string {
		case CREATED = 'created';
		case PAID = 'paid';
		case DECLINED = 'declined';
		case ERROR = 'error';
		case VALIDATED = 'validated';
		case DEBITED = 'debited';
	}

	enum Type: string {
		case SALE = 'sale';
		case REFUND = 'refund';
	}
}

namespace Onslip360\API\Till {
	enum Type: string {
		case TILL = 'till';
		case ORDERING_DEVICE = 'ordering-device';
	}
}

namespace Onslip360\API\TriggerAction {
	enum LogLevel: string {
		case ERRORS = 'errors';
		case WARNINGS = 'warnings';
		case RESULTS = 'results';
		case PROGRESS = 'progress';
		case ALL = 'all';
	}

	enum Type: string {
		case REPORT = 'report';
		case WEBHOOK = 'webhook';
		case ERP_INTEGRATION = 'erp-integration';
		case DM_CAMPAIGN = 'dm-campaign';
		case DIGITAL_RECEIPT = 'digital-receipt';
		case EMAIL = 'email';
	}
}

namespace Onslip360\API\TriggerEvent {
	enum Status: string {
		case PENDING = 'pending';
		case STARTED = 'started';
		case DEFERRED_EXECUTION = 'deferred-execution';
		case EXECUTED = 'executed';
		case DEFERRED_NOTIFICATION = 'deferred-notification';
		case DONE = 'done';
		case FAILED = 'failed';
	}
}

namespace Onslip360\API\Trigger {
	enum Type: string {
		case CRON = 'cron';
		case QUERY = 'query';
	}
}

namespace Onslip360\API\UsageEntry {
	enum Type: string {
		case CASHIER_LOGIN_ONLINE = 'cashier-login-online';
		case CASHIER_LOGIN_OFFLINE = 'cashier-login-offline';
		case CASHIER_LOGOUT = 'cashier-logout';
		case TAB_SUSPEND = 'tab-suspend';
		case TAB_RESUME = 'tab-resume';
		case TAB_CLOSE = 'tab-close';
		case TAB_MERGE = 'tab-merge';
		case VOUCHER_CREATE = 'voucher-create';
		case VOUCHER_UPDATE = 'voucher-update';
		case VOUCHER_TRANSACTION = 'voucher-transaction';
		case VOUCHER_DELETE = 'voucher-delete';
		case PRODUCT_CREATE = 'product-create';
		case PRODUCT_UPDATE = 'product-update';
		case PRODUCT_DELETE = 'product-delete';
		case PRODUCT_GROUP_CREATE = 'product-group-create';
		case PRODUCT_GROUP_UPDATE = 'product-group-update';
		case PRODUCT_GROUP_DELETE = 'product-group-delete';
		case INVENTORY_ADJUSTMENT_CREATE = 'inventory-adjustment-create';
		case INVENTORY_ADJUSTMENT_UPDATE = 'inventory-adjustment-update';
		case INVENTORY_ADJUSTMENT_DELETE = 'inventory-adjustment-delete';
		case STOCK_BALANCE_TRANSACTION = 'stock-balance-transaction';
		case PASSWORD_RESET_CHALLENGE = 'password-reset-challenge';
		case PASSWORD_RESET = 'password-reset';
		case SHIFT_HISTORY = 'shift-history';
	}
}

namespace Onslip360\API\User {
	enum SystemRole: string {
		case ADMIN = 'admin';
		case CASHIER = 'cashier';
		case SERVICE = 'service';
		case EMPLOYEE = 'employee';
	}
}

namespace Onslip360\API\Voucher {
	enum Type: string {
		case PAYMENT = 'payment';
		case COUPON = 'coupon';
	}
}

namespace Onslip360\API {
	use \Onslip360\Nil;
	use \Onslip360\Onslip360Object;

	class AccessToken extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param Permission[]|null $permissions
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $alias,
			public string $name,
			public AccessToken\Type $type,
			public string|null $created = null,
			public string|null $deleted = null,
			public bool|null $external = null,
			public int|null $id = null,
			public string|null $key = null,
			public array|null $labels = null,
			public array|null $permissions = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'], $j['name'], static::e(AccessToken\Type::from(...), $j['type']), $j['created'] ?? null, $j['deleted'] ?? null, $j['external'] ?? null, $j['id'] ?? null, $j['key'] ?? null, $j['labels'] ?? null, static::e(Permission::from(...), $j['permissions'] ?? null), $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['user'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'name' => $this->name, 'type' => $this->type, 'created' => $this->created, 'deleted' => $this->deleted, 'external' => $this->external, 'id' => $this->id, 'key' => $this->key, 'labels' => $this->labels, 'permissions' => $this->permissions, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'user' => $this->user ];
		}
	}

	class Partial_AccessToken extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param Permission[]|null|Nil $permissions
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null $alias = null,
			public string|null|Nil $deleted = null,
			public bool|null|Nil $external = null,
			public string|null|Nil $key = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public array|null|Nil $permissions = null,
			public array|null|Nil $tags = null,
			public AccessToken\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'] ?? null, $j['deleted'] ?? null, $j['external'] ?? null, $j['key'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, static::e(Permission::from(...), $j['permissions'] ?? null), $j['tags'] ?? null, static::e(AccessToken\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'deleted' => $this->deleted, 'external' => $this->external, 'key' => $this->key, 'labels' => $this->labels, 'name' => $this->name, 'permissions' => $this->permissions, 'tags' => $this->tags, 'type' => $this->type ];
		}
	}

	class Stored_AccessToken extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param Permission[]|null $permissions
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $alias,
			public string $created,
			public int $id,
			public string $name,
			public AccessToken\Type $type,
			public string $updated,
			public int $user,
			public string|null $deleted = null,
			public bool|null $external = null,
			public string|null $key = null,
			public array|null $labels = null,
			public array|null $permissions = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'], $j['created'], $j['id'], $j['name'], static::e(AccessToken\Type::from(...), $j['type']), $j['updated'], $j['user'], $j['deleted'] ?? null, $j['external'] ?? null, $j['key'] ?? null, $j['labels'] ?? null, static::e(Permission::from(...), $j['permissions'] ?? null), $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'type' => $this->type, 'updated' => $this->updated, 'user' => $this->user, 'deleted' => $this->deleted, 'external' => $this->external, 'key' => $this->key, 'labels' => $this->labels, 'permissions' => $this->permissions, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class AccessTokenCert extends Onslip360Object {
		function __construct(
			public string $cert,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['cert'] ];
		}

		protected function _toJson(): array {
			return [ 'cert' => $this->cert ];
		}
	}

	class Partial_AccessTokenCert extends Onslip360Object {
		function __construct(
			public string|null $cert = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['cert'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'cert' => $this->cert ];
		}
	}

	class Account extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public int $account,
			public string $name,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['account'], $j['name'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'account' => $this->account, 'name' => $this->name, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_Account extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public int|null $account = null,
			public string|null|Nil $deleted = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['account'] ?? null, $j['deleted'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'account' => $this->account, 'deleted' => $this->deleted, 'labels' => $this->labels, 'name' => $this->name, 'tags' => $this->tags ];
		}
	}

	class Stored_Account extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public int $account,
			public string $created,
			public int $id,
			public string $name,
			public string $updated,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['account'], $j['created'], $j['id'], $j['name'], $j['updated'], $j['deleted'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'account' => $this->account, 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'updated' => $this->updated, 'deleted' => $this->deleted, 'labels' => $this->labels, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class AccountConfig extends Onslip360Object {
		/**
		 * @param PaymentMethodAccount[]|null $paymentMethods
		 * @param ProductGroupAccount[]|null $productGroups
		*/
		function __construct(
			public int|null $gratuities = null,
			public string|null $journalSeries = null,
			public int|null $mismatches = null,
			public array|null $paymentMethods = null,
			public array|null $productGroups = null,
			public int|null $rounding = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['gratuities'] ?? null, $j['journal-series'] ?? null, $j['mismatches'] ?? null, PaymentMethodAccount::a($j['payment-methods'] ?? null), ProductGroupAccount::a($j['product-groups'] ?? null), $j['rounding'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'gratuities' => $this->gratuities, 'journal-series' => $this->journalSeries, 'mismatches' => $this->mismatches, 'payment-methods' => $this->paymentMethods, 'product-groups' => $this->productGroups, 'rounding' => $this->rounding ];
		}
	}

	class Partial_AccountConfig extends Onslip360Object {
		/**
		 * @param Partial_PaymentMethodAccount[]|null|Nil $paymentMethods
		 * @param Partial_ProductGroupAccount[]|null|Nil $productGroups
		*/
		function __construct(
			public int|null|Nil $gratuities = null,
			public string|null|Nil $journalSeries = null,
			public int|null|Nil $mismatches = null,
			public array|null|Nil $paymentMethods = null,
			public array|null|Nil $productGroups = null,
			public int|null|Nil $rounding = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['gratuities'] ?? null, $j['journal-series'] ?? null, $j['mismatches'] ?? null, Partial_PaymentMethodAccount::a($j['payment-methods'] ?? null), Partial_ProductGroupAccount::a($j['product-groups'] ?? null), $j['rounding'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'gratuities' => $this->gratuities, 'journal-series' => $this->journalSeries, 'mismatches' => $this->mismatches, 'payment-methods' => $this->paymentMethods, 'product-groups' => $this->productGroups, 'rounding' => $this->rounding ];
		}
	}

	class AccountingEntry extends Onslip360Object {
		function __construct(
			public int $account,
			public float $amount,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['account'], $j['amount'] ];
		}

		protected function _toJson(): array {
			return [ 'account' => $this->account, 'amount' => $this->amount ];
		}
	}

	class Partial_AccountingEntry extends Onslip360Object {
		function __construct(
			public int|null $account = null,
			public float|null $amount = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['account'] ?? null, $j['amount'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'account' => $this->account, 'amount' => $this->amount ];
		}
	}

	class ActiveTrigger extends Onslip360Object {
		function __construct(
			public TriggerAction $triggerAction,
			public TriggerEvent\Status $triggerStatus,
			public string $userAlias,
			public int|null $trigger = null,
			public string|null $triggerEtag = null,
			public int|null $triggerEvent = null,
			public string|null $triggerTime = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ TriggerAction::o($j['trigger-action']), static::e(TriggerEvent\Status::from(...), $j['trigger-status']), $j['user-alias'], $j['trigger'] ?? null, $j['trigger-etag'] ?? null, $j['trigger-event'] ?? null, $j['trigger-time'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'trigger-action' => $this->triggerAction, 'trigger-status' => $this->triggerStatus, 'user-alias' => $this->userAlias, 'trigger' => $this->trigger, 'trigger-etag' => $this->triggerEtag, 'trigger-event' => $this->triggerEvent, 'trigger-time' => $this->triggerTime ];
		}
	}

	class Partial_ActiveTrigger extends Onslip360Object {
		function __construct(
			public int|null|Nil $trigger = null,
			public Partial_TriggerAction|null $triggerAction = null,
			public string|null|Nil $triggerEtag = null,
			public int|null|Nil $triggerEvent = null,
			public TriggerEvent\Status|null $triggerStatus = null,
			public string|null|Nil $triggerTime = null,
			public string|null $userAlias = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['trigger'] ?? null, Partial_TriggerAction::o($j['trigger-action'] ?? null), $j['trigger-etag'] ?? null, $j['trigger-event'] ?? null, static::e(TriggerEvent\Status::from(...), $j['trigger-status'] ?? null), $j['trigger-time'] ?? null, $j['user-alias'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'trigger' => $this->trigger, 'trigger-action' => $this->triggerAction, 'trigger-etag' => $this->triggerEtag, 'trigger-event' => $this->triggerEvent, 'trigger-status' => $this->triggerStatus, 'trigger-time' => $this->triggerTime, 'user-alias' => $this->userAlias ];
		}
	}

	class BLActivation extends Onslip360Object {
		function __construct(
			public string $userKey,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['user-key'] ];
		}

		protected function _toJson(): array {
			return [ 'user-key' => $this->userKey ];
		}
	}

	class Partial_BLActivation extends Onslip360Object {
		function __construct(
			public string|null $userKey = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['user-key'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'user-key' => $this->userKey ];
		}
	}

	class Batch extends Onslip360Object {
		/**
		 * @param Payment[]|null $amounts
		 * @param VATSummary[]|null $vatSummaries
		*/
		function __construct(
			public Batch\Type $type,
			public array|null $amounts = null,
			public float|null $cashAmount = null,
			public array|null $vatSummaries = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(Batch\Type::from(...), $j['type']), Payment::a($j['amounts'] ?? null), $j['cash-amount'] ?? null, VATSummary::a($j['vat-summaries'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type, 'amounts' => $this->amounts, 'cash-amount' => $this->cashAmount, 'vat-summaries' => $this->vatSummaries ];
		}
	}

	class Partial_Batch extends Onslip360Object {
		/**
		 * @param Partial_Payment[]|null|Nil $amounts
		 * @param Partial_VATSummary[]|null|Nil $vatSummaries
		*/
		function __construct(
			public array|null|Nil $amounts = null,
			public float|null|Nil $cashAmount = null,
			public Batch\Type|null $type = null,
			public array|null|Nil $vatSummaries = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_Payment::a($j['amounts'] ?? null), $j['cash-amount'] ?? null, static::e(Batch\Type::from(...), $j['type'] ?? null), Partial_VATSummary::a($j['vat-summaries'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'amounts' => $this->amounts, 'cash-amount' => $this->cashAmount, 'type' => $this->type, 'vat-summaries' => $this->vatSummaries ];
		}
	}

	class Button extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $name,
			public int $parent,
			public int $product,
			public float $rank,
			public string $type,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public int|null $theme = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], $j['parent'], $j['product'], $j['rank'], $j['type'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['theme'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'parent' => $this->parent, 'product' => $this->product, 'rank' => $this->rank, 'type' => $this->type, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'tags' => $this->tags, 'theme' => $this->theme, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_Button extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public int|null $parent = null,
			public int|null $product = null,
			public float|null $rank = null,
			public array|null|Nil $tags = null,
			public int|null|Nil $theme = null,
			public string|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['parent'] ?? null, $j['product'] ?? null, $j['rank'] ?? null, $j['tags'] ?? null, $j['theme'] ?? null, $j['type'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'labels' => $this->labels, 'name' => $this->name, 'parent' => $this->parent, 'product' => $this->product, 'rank' => $this->rank, 'tags' => $this->tags, 'theme' => $this->theme, 'type' => $this->type ];
		}
	}

	class Stored_Button extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $name,
			public int $parent,
			public int $product,
			public float $rank,
			public string $type,
			public string $updated,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public int|null $theme = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['name'], $j['parent'], $j['product'], $j['rank'], $j['type'], $j['updated'], $j['deleted'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['theme'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'parent' => $this->parent, 'product' => $this->product, 'rank' => $this->rank, 'type' => $this->type, 'updated' => $this->updated, 'deleted' => $this->deleted, 'labels' => $this->labels, 'tags' => $this->tags, 'theme' => $this->theme, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class ButtonMap extends Onslip360Object {
		/**
		 * @param ButtonMapItem[] $buttons
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public array $buttons,
			public int $height,
			public string $name,
			public ButtonMap\Type $type,
			public int $width,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public ButtonMap\Theme|null $theme = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ ButtonMapItem::a($j['buttons']), $j['height'], $j['name'], static::e(ButtonMap\Type::from(...), $j['type']), $j['width'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, static::e(ButtonMap\Theme::from(...), $j['theme'] ?? null), $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'buttons' => $this->buttons, 'height' => $this->height, 'name' => $this->name, 'type' => $this->type, 'width' => $this->width, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'tags' => $this->tags, 'theme' => $this->theme, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_ButtonMap extends Onslip360Object {
		/**
		 * @param Partial_ButtonMapItem[]|null $buttons
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public array|null $buttons = null,
			public string|null|Nil $deleted = null,
			public int|null $height = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public array|null|Nil $tags = null,
			public ButtonMap\Theme|null|Nil $theme = null,
			public ButtonMap\Type|null $type = null,
			public int|null $width = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_ButtonMapItem::a($j['buttons'] ?? null), $j['deleted'] ?? null, $j['height'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['tags'] ?? null, static::e(ButtonMap\Theme::from(...), $j['theme'] ?? null), static::e(ButtonMap\Type::from(...), $j['type'] ?? null), $j['width'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'buttons' => $this->buttons, 'deleted' => $this->deleted, 'height' => $this->height, 'labels' => $this->labels, 'name' => $this->name, 'tags' => $this->tags, 'theme' => $this->theme, 'type' => $this->type, 'width' => $this->width ];
		}
	}

	class Stored_ButtonMap extends Onslip360Object {
		/**
		 * @param ButtonMapItem[] $buttons
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public array $buttons,
			public string $created,
			public int $height,
			public int $id,
			public string $name,
			public ButtonMap\Type $type,
			public string $updated,
			public int $width,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public ButtonMap\Theme|null $theme = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ ButtonMapItem::a($j['buttons']), $j['created'], $j['height'], $j['id'], $j['name'], static::e(ButtonMap\Type::from(...), $j['type']), $j['updated'], $j['width'], $j['deleted'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, static::e(ButtonMap\Theme::from(...), $j['theme'] ?? null), $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'buttons' => $this->buttons, 'created' => $this->created, 'height' => $this->height, 'id' => $this->id, 'name' => $this->name, 'type' => $this->type, 'updated' => $this->updated, 'width' => $this->width, 'deleted' => $this->deleted, 'labels' => $this->labels, 'tags' => $this->tags, 'theme' => $this->theme, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class ButtonMapItem extends Onslip360Object {
		function __construct(
			public ButtonMapItem\Action $action,
			public int $x,
			public int $y,
			public float|null $amount = null,
			public int|null $buttonMap = null,
			public float|null $discountRate = null,
			public ButtonMapItem\DiscountType|null $discountType = null,
			public string|null $name = null,
			public int|null $product = null,
			public int|null $theme = null,
			public string|null $uri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(ButtonMapItem\Action::from(...), $j['action']), $j['x'], $j['y'], $j['amount'] ?? null, $j['button-map'] ?? null, $j['discount-rate'] ?? null, static::e(ButtonMapItem\DiscountType::from(...), $j['discount-type'] ?? null), $j['name'] ?? null, $j['product'] ?? null, $j['theme'] ?? null, $j['uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'action' => $this->action, 'x' => $this->x, 'y' => $this->y, 'amount' => $this->amount, 'button-map' => $this->buttonMap, 'discount-rate' => $this->discountRate, 'discount-type' => $this->discountType, 'name' => $this->name, 'product' => $this->product, 'theme' => $this->theme, 'uri' => $this->uri ];
		}
	}

	class Partial_ButtonMapItem extends Onslip360Object {
		function __construct(
			public ButtonMapItem\Action|null $action = null,
			public float|null|Nil $amount = null,
			public int|null|Nil $buttonMap = null,
			public float|null|Nil $discountRate = null,
			public ButtonMapItem\DiscountType|null|Nil $discountType = null,
			public string|null|Nil $name = null,
			public int|null|Nil $product = null,
			public int|null|Nil $theme = null,
			public string|null|Nil $uri = null,
			public int|null $x = null,
			public int|null $y = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(ButtonMapItem\Action::from(...), $j['action'] ?? null), $j['amount'] ?? null, $j['button-map'] ?? null, $j['discount-rate'] ?? null, static::e(ButtonMapItem\DiscountType::from(...), $j['discount-type'] ?? null), $j['name'] ?? null, $j['product'] ?? null, $j['theme'] ?? null, $j['uri'] ?? null, $j['x'] ?? null, $j['y'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'action' => $this->action, 'amount' => $this->amount, 'button-map' => $this->buttonMap, 'discount-rate' => $this->discountRate, 'discount-type' => $this->discountType, 'name' => $this->name, 'product' => $this->product, 'theme' => $this->theme, 'uri' => $this->uri, 'x' => $this->x, 'y' => $this->y ];
		}
	}

	class CSR extends Onslip360Object {
		function __construct(
			public string $csr,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['csr'] ];
		}

		protected function _toJson(): array {
			return [ 'csr' => $this->csr ];
		}
	}

	class Partial_CSR extends Onslip360Object {
		function __construct(
			public string|null $csr = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['csr'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'csr' => $this->csr ];
		}
	}

	class CSRRequest extends Onslip360Object {
		function __construct(
			public string $c,
			public string $cn,
			public KeySpecification $key,
			public string $o,
			public string $ou,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['c'], $j['cn'], KeySpecification::o($j['key']), $j['o'], $j['ou'] ];
		}

		protected function _toJson(): array {
			return [ 'c' => $this->c, 'cn' => $this->cn, 'key' => $this->key, 'o' => $this->o, 'ou' => $this->ou ];
		}
	}

	class Partial_CSRRequest extends Onslip360Object {
		function __construct(
			public string|null $c = null,
			public string|null $cn = null,
			public Partial_KeySpecification|null $key = null,
			public string|null $o = null,
			public string|null $ou = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['c'] ?? null, $j['cn'] ?? null, Partial_KeySpecification::o($j['key'] ?? null), $j['o'] ?? null, $j['ou'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'c' => $this->c, 'cn' => $this->cn, 'key' => $this->key, 'o' => $this->o, 'ou' => $this->ou ];
		}
	}

	class Campaign extends Onslip360Object {
		/**
		 * @param CampaignRules[] $rules
		 * @param int[]|null $activeLabels
		 * @param int[]|null $labels
		 * @param int[]|null $locations
		 * @param string[]|null $schedules
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $name,
			public array $rules,
			public Campaign\Type $type,
			public array|null $activeLabels = null,
			public float|null $amount = null,
			public string|null $created = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public float|null $discountRate = null,
			public string|null $endDate = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $locations = null,
			public bool|null $packagePrice = null,
			public array|null $schedules = null,
			public string|null $startDate = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], CampaignRules::a($j['rules']), static::e(Campaign\Type::from(...), $j['type']), $j['active-labels'] ?? null, $j['amount'] ?? null, $j['created'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['discount-rate'] ?? null, $j['end-date'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['locations'] ?? null, $j['package-price'] ?? null, $j['schedules'] ?? null, $j['start-date'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'rules' => $this->rules, 'type' => $this->type, 'active-labels' => $this->activeLabels, 'amount' => $this->amount, 'created' => $this->created, 'deleted' => $this->deleted, 'description' => $this->description, 'discount-rate' => $this->discountRate, 'end-date' => $this->endDate, 'id' => $this->id, 'labels' => $this->labels, 'locations' => $this->locations, 'package-price' => $this->packagePrice, 'schedules' => $this->schedules, 'start-date' => $this->startDate, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_Campaign extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $activeLabels
		 * @param int[]|null|Nil $labels
		 * @param int[]|null|Nil $locations
		 * @param Partial_CampaignRules[]|null $rules
		 * @param string[]|null|Nil $schedules
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public array|null|Nil $activeLabels = null,
			public float|null|Nil $amount = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $description = null,
			public float|null|Nil $discountRate = null,
			public string|null|Nil $endDate = null,
			public array|null|Nil $labels = null,
			public array|null|Nil $locations = null,
			public string|null $name = null,
			public bool|null|Nil $packagePrice = null,
			public array|null $rules = null,
			public array|null|Nil $schedules = null,
			public string|null|Nil $startDate = null,
			public array|null|Nil $tags = null,
			public Campaign\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['active-labels'] ?? null, $j['amount'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['discount-rate'] ?? null, $j['end-date'] ?? null, $j['labels'] ?? null, $j['locations'] ?? null, $j['name'] ?? null, $j['package-price'] ?? null, Partial_CampaignRules::a($j['rules'] ?? null), $j['schedules'] ?? null, $j['start-date'] ?? null, $j['tags'] ?? null, static::e(Campaign\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'active-labels' => $this->activeLabels, 'amount' => $this->amount, 'deleted' => $this->deleted, 'description' => $this->description, 'discount-rate' => $this->discountRate, 'end-date' => $this->endDate, 'labels' => $this->labels, 'locations' => $this->locations, 'name' => $this->name, 'package-price' => $this->packagePrice, 'rules' => $this->rules, 'schedules' => $this->schedules, 'start-date' => $this->startDate, 'tags' => $this->tags, 'type' => $this->type ];
		}
	}

	class Stored_Campaign extends Onslip360Object {
		/**
		 * @param CampaignRules[] $rules
		 * @param int[]|null $activeLabels
		 * @param int[]|null $labels
		 * @param int[]|null $locations
		 * @param string[]|null $schedules
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $name,
			public array $rules,
			public Campaign\Type $type,
			public string $updated,
			public array|null $activeLabels = null,
			public float|null $amount = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public float|null $discountRate = null,
			public string|null $endDate = null,
			public array|null $labels = null,
			public array|null $locations = null,
			public bool|null $packagePrice = null,
			public array|null $schedules = null,
			public string|null $startDate = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['name'], CampaignRules::a($j['rules']), static::e(Campaign\Type::from(...), $j['type']), $j['updated'], $j['active-labels'] ?? null, $j['amount'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['discount-rate'] ?? null, $j['end-date'] ?? null, $j['labels'] ?? null, $j['locations'] ?? null, $j['package-price'] ?? null, $j['schedules'] ?? null, $j['start-date'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'rules' => $this->rules, 'type' => $this->type, 'updated' => $this->updated, 'active-labels' => $this->activeLabels, 'amount' => $this->amount, 'deleted' => $this->deleted, 'description' => $this->description, 'discount-rate' => $this->discountRate, 'end-date' => $this->endDate, 'labels' => $this->labels, 'locations' => $this->locations, 'package-price' => $this->packagePrice, 'schedules' => $this->schedules, 'start-date' => $this->startDate, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class CampaignRules extends Onslip360Object {
		/**
		 * @param int[] $products
		 * @param int[]|null $labels
		*/
		function __construct(
			public array $products,
			public float $quantity,
			public array|null $labels = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['products'], $j['quantity'], $j['labels'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'products' => $this->products, 'quantity' => $this->quantity, 'labels' => $this->labels ];
		}
	}

	class Partial_CampaignRules extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param int[]|null $products
		*/
		function __construct(
			public array|null|Nil $labels = null,
			public array|null $products = null,
			public float|null $quantity = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['labels'] ?? null, $j['products'] ?? null, $j['quantity'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'labels' => $this->labels, 'products' => $this->products, 'quantity' => $this->quantity ];
		}
	}

	class CardBatchSummaryMetadata extends Onslip360Object {
		/**
		 * @param TransactionSummaryGroup[] $transactionSummaryGroups
		*/
		function __construct(
			public string $acquirersRefNo,
			public string $bankAgentName,
			public int $batchId,
			public bool $contactSupport,
			public bool $customerCopy,
			public string $endDate,
			public bool $merchantCopy,
			public string $startDate,
			public string $terminalId,
			public string $transactionDate,
			public string $transactionId,
			public TransactionSummary $transactionSummary,
			public array $transactionSummaryGroups,
			public CardMetadata\TransactionType $transactionType,
			public TransactionSummary|null $acquirersTransactionSummary = null,
			public string|null $device = null,
			public string|null $merchantId = null,
			public string|null $requestId = null,
			public CardMetadata\Status|null $status = null,
			public string|null $statusCode = null,
			public string|null $statusMessage = null,
			public string|null $terminalName = null,
			public string|null $transactionReference = null,
			public string|null $transactionResult = null,
			public string|null $transmissionId = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['acquirers-ref-no'], $j['bank-agent-name'], $j['batch-id'], $j['contact-support'], $j['customer-copy'], $j['end-date'], $j['merchant-copy'], $j['start-date'], $j['terminal-id'], $j['transaction-date'], $j['transaction-id'], TransactionSummary::o($j['transaction-summary']), TransactionSummaryGroup::a($j['transaction-summary-groups']), static::e(CardMetadata\TransactionType::from(...), $j['transaction-type']), TransactionSummary::o($j['acquirers-transaction-summary'] ?? null), $j['device'] ?? null, $j['merchant-id'] ?? null, $j['request-id'] ?? null, static::e(CardMetadata\Status::from(...), $j['status'] ?? null), $j['status-code'] ?? null, $j['status-message'] ?? null, $j['terminal-name'] ?? null, $j['transaction-reference'] ?? null, $j['transaction-result'] ?? null, $j['transmission-id'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'acquirers-ref-no' => $this->acquirersRefNo, 'bank-agent-name' => $this->bankAgentName, 'batch-id' => $this->batchId, 'contact-support' => $this->contactSupport, 'customer-copy' => $this->customerCopy, 'end-date' => $this->endDate, 'merchant-copy' => $this->merchantCopy, 'start-date' => $this->startDate, 'terminal-id' => $this->terminalId, 'transaction-date' => $this->transactionDate, 'transaction-id' => $this->transactionId, 'transaction-summary' => $this->transactionSummary, 'transaction-summary-groups' => $this->transactionSummaryGroups, 'transaction-type' => $this->transactionType, 'acquirers-transaction-summary' => $this->acquirersTransactionSummary, 'device' => $this->device, 'merchant-id' => $this->merchantId, 'request-id' => $this->requestId, 'status' => $this->status, 'status-code' => $this->statusCode, 'status-message' => $this->statusMessage, 'terminal-name' => $this->terminalName, 'transaction-reference' => $this->transactionReference, 'transaction-result' => $this->transactionResult, 'transmission-id' => $this->transmissionId ];
		}
	}

	class Partial_CardBatchSummaryMetadata extends Onslip360Object {
		/**
		 * @param Partial_TransactionSummaryGroup[]|null $transactionSummaryGroups
		*/
		function __construct(
			public string|null $acquirersRefNo = null,
			public Partial_TransactionSummary|null|Nil $acquirersTransactionSummary = null,
			public string|null $bankAgentName = null,
			public int|null $batchId = null,
			public bool|null $contactSupport = null,
			public bool|null $customerCopy = null,
			public string|null|Nil $device = null,
			public string|null $endDate = null,
			public bool|null $merchantCopy = null,
			public string|null|Nil $merchantId = null,
			public string|null|Nil $requestId = null,
			public string|null $startDate = null,
			public CardMetadata\Status|null|Nil $status = null,
			public string|null|Nil $statusCode = null,
			public string|null|Nil $statusMessage = null,
			public string|null $terminalId = null,
			public string|null|Nil $terminalName = null,
			public string|null $transactionDate = null,
			public string|null $transactionId = null,
			public string|null|Nil $transactionReference = null,
			public string|null|Nil $transactionResult = null,
			public Partial_TransactionSummary|null $transactionSummary = null,
			public array|null $transactionSummaryGroups = null,
			public CardMetadata\TransactionType|null $transactionType = null,
			public string|null|Nil $transmissionId = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['acquirers-ref-no'] ?? null, Partial_TransactionSummary::o($j['acquirers-transaction-summary'] ?? null), $j['bank-agent-name'] ?? null, $j['batch-id'] ?? null, $j['contact-support'] ?? null, $j['customer-copy'] ?? null, $j['device'] ?? null, $j['end-date'] ?? null, $j['merchant-copy'] ?? null, $j['merchant-id'] ?? null, $j['request-id'] ?? null, $j['start-date'] ?? null, static::e(CardMetadata\Status::from(...), $j['status'] ?? null), $j['status-code'] ?? null, $j['status-message'] ?? null, $j['terminal-id'] ?? null, $j['terminal-name'] ?? null, $j['transaction-date'] ?? null, $j['transaction-id'] ?? null, $j['transaction-reference'] ?? null, $j['transaction-result'] ?? null, Partial_TransactionSummary::o($j['transaction-summary'] ?? null), Partial_TransactionSummaryGroup::a($j['transaction-summary-groups'] ?? null), static::e(CardMetadata\TransactionType::from(...), $j['transaction-type'] ?? null), $j['transmission-id'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'acquirers-ref-no' => $this->acquirersRefNo, 'acquirers-transaction-summary' => $this->acquirersTransactionSummary, 'bank-agent-name' => $this->bankAgentName, 'batch-id' => $this->batchId, 'contact-support' => $this->contactSupport, 'customer-copy' => $this->customerCopy, 'device' => $this->device, 'end-date' => $this->endDate, 'merchant-copy' => $this->merchantCopy, 'merchant-id' => $this->merchantId, 'request-id' => $this->requestId, 'start-date' => $this->startDate, 'status' => $this->status, 'status-code' => $this->statusCode, 'status-message' => $this->statusMessage, 'terminal-id' => $this->terminalId, 'terminal-name' => $this->terminalName, 'transaction-date' => $this->transactionDate, 'transaction-id' => $this->transactionId, 'transaction-reference' => $this->transactionReference, 'transaction-result' => $this->transactionResult, 'transaction-summary' => $this->transactionSummary, 'transaction-summary-groups' => $this->transactionSummaryGroups, 'transaction-type' => $this->transactionType, 'transmission-id' => $this->transmissionId ];
		}
	}

	class CardReceiptMetadata extends Onslip360Object {
		function __construct(
			public string $acquirersRefNo,
			public string $bankAgentName,
			public int $batchId,
			public bool $cardHolderSignature,
			public bool $cashierSignature,
			public bool $contactSupport,
			public bool $customerCopy,
			public CardReceiptMetadata\EntryMode $entryMode,
			public bool $merchantCopy,
			public CardMetadata\Status $status,
			public string $terminalId,
			public string $transactionDate,
			public string $transactionId,
			public CardMetadata\TransactionType $transactionType,
			public CardReceiptMetadata\VerificationMethod $verificationMethod,
			public string|null $ac = null,
			public string|null $aid = null,
			public string|null $authApprovalCode = null,
			public string|null $authChannel = null,
			public string|null $authResponder = null,
			public string|null $authResponseCode = null,
			public string|null $authSummary = null,
			public CardReceiptMetadata\CardAccount|null $cardAccount = null,
			public string|null $cardApp = null,
			public string|null $cardCna = null,
			public string|null $cardHolderId = null,
			public float|null $cbAmount = null,
			public int|null $contactlessKernelId = null,
			public string|null $currencyCode = null,
			public string|null $device = null,
			public float|null $extraAmount = null,
			public string|null $financialInstitution = null,
			public string|null $ksn = null,
			public string|null $merchantId = null,
			public string|null $orgNumber = null,
			public string|null $pan = null,
			public string|null $paymentCode = null,
			public string|null $psn = null,
			public string|null $receiptLines = null,
			public string|null $requestId = null,
			public string|null $statusCode = null,
			public string|null $statusMessage = null,
			public string|null $terminalName = null,
			public string|null $transactionReference = null,
			public string|null $transactionResult = null,
			public string|null $transmissionId = null,
			public string|null $tsi = null,
			public string|null $tvr = null,
			public float|null $txAmount = null,
			public float|null $vatAmount = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['acquirers-ref-no'], $j['bank-agent-name'], $j['batch-id'], $j['card-holder-signature'], $j['cashier-signature'], $j['contact-support'], $j['customer-copy'], static::e(CardReceiptMetadata\EntryMode::from(...), $j['entry-mode']), $j['merchant-copy'], static::e(CardMetadata\Status::from(...), $j['status']), $j['terminal-id'], $j['transaction-date'], $j['transaction-id'], static::e(CardMetadata\TransactionType::from(...), $j['transaction-type']), static::e(CardReceiptMetadata\VerificationMethod::from(...), $j['verification-method']), $j['ac'] ?? null, $j['aid'] ?? null, $j['auth-approval-code'] ?? null, $j['auth-channel'] ?? null, $j['auth-responder'] ?? null, $j['auth-response-code'] ?? null, $j['auth-summary'] ?? null, static::e(CardReceiptMetadata\CardAccount::from(...), $j['card-account'] ?? null), $j['card-app'] ?? null, $j['card-cna'] ?? null, $j['card-holder-id'] ?? null, $j['cb-amount'] ?? null, $j['contactless-kernel-id'] ?? null, $j['currency-code'] ?? null, $j['device'] ?? null, $j['extra-amount'] ?? null, $j['financial-institution'] ?? null, $j['ksn'] ?? null, $j['merchant-id'] ?? null, $j['org-number'] ?? null, $j['pan'] ?? null, $j['payment-code'] ?? null, $j['psn'] ?? null, $j['receipt-lines'] ?? null, $j['request-id'] ?? null, $j['status-code'] ?? null, $j['status-message'] ?? null, $j['terminal-name'] ?? null, $j['transaction-reference'] ?? null, $j['transaction-result'] ?? null, $j['transmission-id'] ?? null, $j['tsi'] ?? null, $j['tvr'] ?? null, $j['tx-amount'] ?? null, $j['vat-amount'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'acquirers-ref-no' => $this->acquirersRefNo, 'bank-agent-name' => $this->bankAgentName, 'batch-id' => $this->batchId, 'card-holder-signature' => $this->cardHolderSignature, 'cashier-signature' => $this->cashierSignature, 'contact-support' => $this->contactSupport, 'customer-copy' => $this->customerCopy, 'entry-mode' => $this->entryMode, 'merchant-copy' => $this->merchantCopy, 'status' => $this->status, 'terminal-id' => $this->terminalId, 'transaction-date' => $this->transactionDate, 'transaction-id' => $this->transactionId, 'transaction-type' => $this->transactionType, 'verification-method' => $this->verificationMethod, 'ac' => $this->ac, 'aid' => $this->aid, 'auth-approval-code' => $this->authApprovalCode, 'auth-channel' => $this->authChannel, 'auth-responder' => $this->authResponder, 'auth-response-code' => $this->authResponseCode, 'auth-summary' => $this->authSummary, 'card-account' => $this->cardAccount, 'card-app' => $this->cardApp, 'card-cna' => $this->cardCna, 'card-holder-id' => $this->cardHolderId, 'cb-amount' => $this->cbAmount, 'contactless-kernel-id' => $this->contactlessKernelId, 'currency-code' => $this->currencyCode, 'device' => $this->device, 'extra-amount' => $this->extraAmount, 'financial-institution' => $this->financialInstitution, 'ksn' => $this->ksn, 'merchant-id' => $this->merchantId, 'org-number' => $this->orgNumber, 'pan' => $this->pan, 'payment-code' => $this->paymentCode, 'psn' => $this->psn, 'receipt-lines' => $this->receiptLines, 'request-id' => $this->requestId, 'status-code' => $this->statusCode, 'status-message' => $this->statusMessage, 'terminal-name' => $this->terminalName, 'transaction-reference' => $this->transactionReference, 'transaction-result' => $this->transactionResult, 'transmission-id' => $this->transmissionId, 'tsi' => $this->tsi, 'tvr' => $this->tvr, 'tx-amount' => $this->txAmount, 'vat-amount' => $this->vatAmount ];
		}
	}

	class Partial_CardReceiptMetadata extends Onslip360Object {
		function __construct(
			public string|null|Nil $ac = null,
			public string|null $acquirersRefNo = null,
			public string|null|Nil $aid = null,
			public string|null|Nil $authApprovalCode = null,
			public string|null|Nil $authChannel = null,
			public string|null|Nil $authResponder = null,
			public string|null|Nil $authResponseCode = null,
			public string|null|Nil $authSummary = null,
			public string|null $bankAgentName = null,
			public int|null $batchId = null,
			public CardReceiptMetadata\CardAccount|null|Nil $cardAccount = null,
			public string|null|Nil $cardApp = null,
			public string|null|Nil $cardCna = null,
			public string|null|Nil $cardHolderId = null,
			public bool|null $cardHolderSignature = null,
			public bool|null $cashierSignature = null,
			public float|null|Nil $cbAmount = null,
			public bool|null $contactSupport = null,
			public int|null|Nil $contactlessKernelId = null,
			public string|null|Nil $currencyCode = null,
			public bool|null $customerCopy = null,
			public string|null|Nil $device = null,
			public CardReceiptMetadata\EntryMode|null $entryMode = null,
			public float|null|Nil $extraAmount = null,
			public string|null|Nil $financialInstitution = null,
			public string|null|Nil $ksn = null,
			public bool|null $merchantCopy = null,
			public string|null|Nil $merchantId = null,
			public string|null|Nil $orgNumber = null,
			public string|null|Nil $pan = null,
			public string|null|Nil $paymentCode = null,
			public string|null|Nil $psn = null,
			public string|null|Nil $receiptLines = null,
			public string|null|Nil $requestId = null,
			public CardMetadata\Status|null $status = null,
			public string|null|Nil $statusCode = null,
			public string|null|Nil $statusMessage = null,
			public string|null $terminalId = null,
			public string|null|Nil $terminalName = null,
			public string|null $transactionDate = null,
			public string|null $transactionId = null,
			public string|null|Nil $transactionReference = null,
			public string|null|Nil $transactionResult = null,
			public CardMetadata\TransactionType|null $transactionType = null,
			public string|null|Nil $transmissionId = null,
			public string|null|Nil $tsi = null,
			public string|null|Nil $tvr = null,
			public float|null|Nil $txAmount = null,
			public float|null|Nil $vatAmount = null,
			public CardReceiptMetadata\VerificationMethod|null $verificationMethod = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['ac'] ?? null, $j['acquirers-ref-no'] ?? null, $j['aid'] ?? null, $j['auth-approval-code'] ?? null, $j['auth-channel'] ?? null, $j['auth-responder'] ?? null, $j['auth-response-code'] ?? null, $j['auth-summary'] ?? null, $j['bank-agent-name'] ?? null, $j['batch-id'] ?? null, static::e(CardReceiptMetadata\CardAccount::from(...), $j['card-account'] ?? null), $j['card-app'] ?? null, $j['card-cna'] ?? null, $j['card-holder-id'] ?? null, $j['card-holder-signature'] ?? null, $j['cashier-signature'] ?? null, $j['cb-amount'] ?? null, $j['contact-support'] ?? null, $j['contactless-kernel-id'] ?? null, $j['currency-code'] ?? null, $j['customer-copy'] ?? null, $j['device'] ?? null, static::e(CardReceiptMetadata\EntryMode::from(...), $j['entry-mode'] ?? null), $j['extra-amount'] ?? null, $j['financial-institution'] ?? null, $j['ksn'] ?? null, $j['merchant-copy'] ?? null, $j['merchant-id'] ?? null, $j['org-number'] ?? null, $j['pan'] ?? null, $j['payment-code'] ?? null, $j['psn'] ?? null, $j['receipt-lines'] ?? null, $j['request-id'] ?? null, static::e(CardMetadata\Status::from(...), $j['status'] ?? null), $j['status-code'] ?? null, $j['status-message'] ?? null, $j['terminal-id'] ?? null, $j['terminal-name'] ?? null, $j['transaction-date'] ?? null, $j['transaction-id'] ?? null, $j['transaction-reference'] ?? null, $j['transaction-result'] ?? null, static::e(CardMetadata\TransactionType::from(...), $j['transaction-type'] ?? null), $j['transmission-id'] ?? null, $j['tsi'] ?? null, $j['tvr'] ?? null, $j['tx-amount'] ?? null, $j['vat-amount'] ?? null, static::e(CardReceiptMetadata\VerificationMethod::from(...), $j['verification-method'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'ac' => $this->ac, 'acquirers-ref-no' => $this->acquirersRefNo, 'aid' => $this->aid, 'auth-approval-code' => $this->authApprovalCode, 'auth-channel' => $this->authChannel, 'auth-responder' => $this->authResponder, 'auth-response-code' => $this->authResponseCode, 'auth-summary' => $this->authSummary, 'bank-agent-name' => $this->bankAgentName, 'batch-id' => $this->batchId, 'card-account' => $this->cardAccount, 'card-app' => $this->cardApp, 'card-cna' => $this->cardCna, 'card-holder-id' => $this->cardHolderId, 'card-holder-signature' => $this->cardHolderSignature, 'cashier-signature' => $this->cashierSignature, 'cb-amount' => $this->cbAmount, 'contact-support' => $this->contactSupport, 'contactless-kernel-id' => $this->contactlessKernelId, 'currency-code' => $this->currencyCode, 'customer-copy' => $this->customerCopy, 'device' => $this->device, 'entry-mode' => $this->entryMode, 'extra-amount' => $this->extraAmount, 'financial-institution' => $this->financialInstitution, 'ksn' => $this->ksn, 'merchant-copy' => $this->merchantCopy, 'merchant-id' => $this->merchantId, 'org-number' => $this->orgNumber, 'pan' => $this->pan, 'payment-code' => $this->paymentCode, 'psn' => $this->psn, 'receipt-lines' => $this->receiptLines, 'request-id' => $this->requestId, 'status' => $this->status, 'status-code' => $this->statusCode, 'status-message' => $this->statusMessage, 'terminal-id' => $this->terminalId, 'terminal-name' => $this->terminalName, 'transaction-date' => $this->transactionDate, 'transaction-id' => $this->transactionId, 'transaction-reference' => $this->transactionReference, 'transaction-result' => $this->transactionResult, 'transaction-type' => $this->transactionType, 'transmission-id' => $this->transmissionId, 'tsi' => $this->tsi, 'tvr' => $this->tvr, 'tx-amount' => $this->txAmount, 'vat-amount' => $this->vatAmount, 'verification-method' => $this->verificationMethod ];
		}
	}

	class CardTransaction extends Onslip360Object {
		function __construct(
			public string $id,
			public CardTransaction\Type $type,
			public CardBatchSummaryMetadata|null $cardBatchSummary = null,
			public CardReceiptMetadata|null $cardReceipt = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['id'], static::e(CardTransaction\Type::from(...), $j['type']), CardBatchSummaryMetadata::o($j['card-batch-summary'] ?? null), CardReceiptMetadata::o($j['card-receipt'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'id' => $this->id, 'type' => $this->type, 'card-batch-summary' => $this->cardBatchSummary, 'card-receipt' => $this->cardReceipt ];
		}
	}

	class Partial_CardTransaction extends Onslip360Object {
		function __construct(
			public Partial_CardBatchSummaryMetadata|null|Nil $cardBatchSummary = null,
			public Partial_CardReceiptMetadata|null|Nil $cardReceipt = null,
			public string|null $id = null,
			public CardTransaction\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_CardBatchSummaryMetadata::o($j['card-batch-summary'] ?? null), Partial_CardReceiptMetadata::o($j['card-receipt'] ?? null), $j['id'] ?? null, static::e(CardTransaction\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'card-batch-summary' => $this->cardBatchSummary, 'card-receipt' => $this->cardReceipt, 'id' => $this->id, 'type' => $this->type ];
		}
	}

	class CashDrawer extends Onslip360Object {
		function __construct(
			public CashDrawer\Type $type,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(CashDrawer\Type::from(...), $j['type']) ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type ];
		}
	}

	class Partial_CashDrawer extends Onslip360Object {
		function __construct(
			public CashDrawer\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(CashDrawer\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type ];
		}
	}

	class Cert extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $name,
			public string|null $created = null,
			public string|null $deleted = null,
			public string|null $expires = null,
			public int|null $id = null,
			public string|null $key = null,
			public array|null $labels = null,
			public string|null $pkcs12Store = null,
			public array|null $tags = null,
			public Cert\Type|null $type = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], $j['created'] ?? null, $j['deleted'] ?? null, $j['expires'] ?? null, $j['id'] ?? null, $j['key'] ?? null, $j['labels'] ?? null, $j['pkcs-12-store'] ?? null, $j['tags'] ?? null, static::e(Cert\Type::from(...), $j['type'] ?? null), $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'created' => $this->created, 'deleted' => $this->deleted, 'expires' => $this->expires, 'id' => $this->id, 'key' => $this->key, 'labels' => $this->labels, 'pkcs-12-store' => $this->pkcs12Store, 'tags' => $this->tags, 'type' => $this->type, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_Cert extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public string|null|Nil $expires = null,
			public string|null|Nil $key = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public string|null|Nil $pkcs12Store = null,
			public array|null|Nil $tags = null,
			public Cert\Type|null|Nil $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['expires'] ?? null, $j['key'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['pkcs-12-store'] ?? null, $j['tags'] ?? null, static::e(Cert\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'expires' => $this->expires, 'key' => $this->key, 'labels' => $this->labels, 'name' => $this->name, 'pkcs-12-store' => $this->pkcs12Store, 'tags' => $this->tags, 'type' => $this->type ];
		}
	}

	class Stored_Cert extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $name,
			public string $updated,
			public string|null $deleted = null,
			public string|null $expires = null,
			public string|null $key = null,
			public array|null $labels = null,
			public string|null $pkcs12Store = null,
			public array|null $tags = null,
			public Cert\Type|null $type = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['name'], $j['updated'], $j['deleted'] ?? null, $j['expires'] ?? null, $j['key'] ?? null, $j['labels'] ?? null, $j['pkcs-12-store'] ?? null, $j['tags'] ?? null, static::e(Cert\Type::from(...), $j['type'] ?? null), $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'updated' => $this->updated, 'deleted' => $this->deleted, 'expires' => $this->expires, 'key' => $this->key, 'labels' => $this->labels, 'pkcs-12-store' => $this->pkcs12Store, 'tags' => $this->tags, 'type' => $this->type, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class ClientInfo extends Onslip360Object {
		/**
		 * @param Permission[] $permissions
		 * @param ServiceEndpoint[] $serviceEndpoints
		*/
		function __construct(
			public Company $company,
			public MerchantParams $merchantParams,
			public array $permissions,
			public array $serviceEndpoints,
			public SystemParams $systemParams,
			public Stored_CompanyConfig|null $companyConfig = null,
			public Stored_Location|null $location = null,
			public string|null $p2PKey = null,
			public string|null $p2PRealm = null,
			public Stored_Till|null $till = null,
			public Stored_User|null $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Company::o($j['company']), MerchantParams::o($j['merchant-params']), static::e(Permission::from(...), $j['permissions']), ServiceEndpoint::a($j['service-endpoints']), SystemParams::o($j['system-params']), Stored_CompanyConfig::o($j['company-config'] ?? null), Stored_Location::o($j['location'] ?? null), $j['p2p-key'] ?? null, $j['p2p-realm'] ?? null, Stored_Till::o($j['till'] ?? null), Stored_User::o($j['user'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'company' => $this->company, 'merchant-params' => $this->merchantParams, 'permissions' => $this->permissions, 'service-endpoints' => $this->serviceEndpoints, 'system-params' => $this->systemParams, 'company-config' => $this->companyConfig, 'location' => $this->location, 'p2p-key' => $this->p2PKey, 'p2p-realm' => $this->p2PRealm, 'till' => $this->till, 'user' => $this->user ];
		}
	}

	class Partial_ClientInfo extends Onslip360Object {
		/**
		 * @param Permission[]|null $permissions
		 * @param Partial_ServiceEndpoint[]|null $serviceEndpoints
		*/
		function __construct(
			public Partial_Company|null $company = null,
			public Partial_CompanyConfig|null|Nil $companyConfig = null,
			public Partial_Location|null|Nil $location = null,
			public Partial_MerchantParams|null $merchantParams = null,
			public string|null|Nil $p2PKey = null,
			public string|null|Nil $p2PRealm = null,
			public array|null $permissions = null,
			public array|null $serviceEndpoints = null,
			public Partial_SystemParams|null $systemParams = null,
			public Partial_Till|null|Nil $till = null,
			public Partial_User|null|Nil $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_Company::o($j['company'] ?? null), Partial_CompanyConfig::o($j['company-config'] ?? null), Partial_Location::o($j['location'] ?? null), Partial_MerchantParams::o($j['merchant-params'] ?? null), $j['p2p-key'] ?? null, $j['p2p-realm'] ?? null, static::e(Permission::from(...), $j['permissions'] ?? null), Partial_ServiceEndpoint::a($j['service-endpoints'] ?? null), Partial_SystemParams::o($j['system-params'] ?? null), Partial_Till::o($j['till'] ?? null), Partial_User::o($j['user'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'company' => $this->company, 'company-config' => $this->companyConfig, 'location' => $this->location, 'merchant-params' => $this->merchantParams, 'p2p-key' => $this->p2PKey, 'p2p-realm' => $this->p2PRealm, 'permissions' => $this->permissions, 'service-endpoints' => $this->serviceEndpoints, 'system-params' => $this->systemParams, 'till' => $this->till, 'user' => $this->user ];
		}
	}

	class CloudControlUnit extends Onslip360Object {
		function __construct(
			public string $password,
			public CloudControlUnit\Type $type,
			public string $username,
			public string|null $uri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['password'], static::e(CloudControlUnit\Type::from(...), $j['type']), $j['username'], $j['uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'password' => $this->password, 'type' => $this->type, 'username' => $this->username, 'uri' => $this->uri ];
		}
	}

	class Partial_CloudControlUnit extends Onslip360Object {
		function __construct(
			public string|null $password = null,
			public CloudControlUnit\Type|null $type = null,
			public string|null|Nil $uri = null,
			public string|null $username = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['password'] ?? null, static::e(CloudControlUnit\Type::from(...), $j['type'] ?? null), $j['uri'] ?? null, $j['username'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'password' => $this->password, 'type' => $this->type, 'uri' => $this->uri, 'username' => $this->username ];
		}
	}

	class CloudControlUnitStatus extends Onslip360Object {
		function __construct(
			public string $firmware,
			public string $id,
			public string $installedLicenses,
			public string $mainStatus,
			public string $storageStatus,
			public string $type,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['firmware'], $j['id'], $j['installed-licenses'], $j['main-status'], $j['storage-status'], $j['type'] ];
		}

		protected function _toJson(): array {
			return [ 'firmware' => $this->firmware, 'id' => $this->id, 'installed-licenses' => $this->installedLicenses, 'main-status' => $this->mainStatus, 'storage-status' => $this->storageStatus, 'type' => $this->type ];
		}
	}

	class Partial_CloudControlUnitStatus extends Onslip360Object {
		function __construct(
			public string|null $firmware = null,
			public string|null $id = null,
			public string|null $installedLicenses = null,
			public string|null $mainStatus = null,
			public string|null $storageStatus = null,
			public string|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['firmware'] ?? null, $j['id'] ?? null, $j['installed-licenses'] ?? null, $j['main-status'] ?? null, $j['storage-status'] ?? null, $j['type'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'firmware' => $this->firmware, 'id' => $this->id, 'installed-licenses' => $this->installedLicenses, 'main-status' => $this->mainStatus, 'storage-status' => $this->storageStatus, 'type' => $this->type ];
		}
	}

	class Command extends Onslip360Object {
		/**
		 * @param string[]|null $args
		*/
		function __construct(
			public string $name,
			public array|null $args = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], $j['args'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'args' => $this->args ];
		}
	}

	class Partial_Command extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $args
		*/
		function __construct(
			public array|null|Nil $args = null,
			public string|null $name = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['args'] ?? null, $j['name'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'args' => $this->args, 'name' => $this->name ];
		}
	}

	class Company extends Onslip360Object {
		/**
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $address,
			public string $alias,
			public string $name,
			public string $orgNumber,
			public string $phoneNumber,
			public Company\Category|null $businessCategory = null,
			public string|null $created = null,
			public string|null $currency = null,
			public string|null $deleted = null,
			public string|null $derivationBaseKey = null,
			public string|null $email = null,
			public CompanyFeature|null $feature = null,
			public int|null $id = null,
			public string|null $locale = null,
			public Company\RegistrationType|null $registrationType = null,
			public int|null $reseller = null,
			public ResellerParams|null $resellerParams = null,
			public string|null $secondaryLocale = null,
			public array|null $tags = null,
			public string|null $terminated = null,
			public string|null $timeZone = null,
			public Company\Type|null $type = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public string|null $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['address'], $j['alias'], $j['name'], $j['org-number'], $j['phone-number'], static::e(Company\Category::from(...), $j['business-category'] ?? null), $j['created'] ?? null, $j['currency'] ?? null, $j['deleted'] ?? null, $j['derivation-base-key'] ?? null, $j['email'] ?? null, CompanyFeature::o($j['feature'] ?? null), $j['id'] ?? null, $j['locale'] ?? null, static::e(Company\RegistrationType::from(...), $j['registration-type'] ?? null), $j['reseller'] ?? null, ResellerParams::o($j['reseller-params'] ?? null), $j['secondary-locale'] ?? null, $j['tags'] ?? null, $j['terminated'] ?? null, $j['time-zone'] ?? null, static::e(Company\Type::from(...), $j['type'] ?? null), $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'address' => $this->address, 'alias' => $this->alias, 'name' => $this->name, 'org-number' => $this->orgNumber, 'phone-number' => $this->phoneNumber, 'business-category' => $this->businessCategory, 'created' => $this->created, 'currency' => $this->currency, 'deleted' => $this->deleted, 'derivation-base-key' => $this->derivationBaseKey, 'email' => $this->email, 'feature' => $this->feature, 'id' => $this->id, 'locale' => $this->locale, 'registration-type' => $this->registrationType, 'reseller' => $this->reseller, 'reseller-params' => $this->resellerParams, 'secondary-locale' => $this->secondaryLocale, 'tags' => $this->tags, 'terminated' => $this->terminated, 'time-zone' => $this->timeZone, 'type' => $this->type, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'web-address' => $this->webAddress ];
		}
	}

	class Partial_Company extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null $address = null,
			public string|null $alias = null,
			public Company\Category|null|Nil $businessCategory = null,
			public string|null|Nil $currency = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $derivationBaseKey = null,
			public string|null|Nil $email = null,
			public Partial_CompanyFeature|null|Nil $feature = null,
			public string|null|Nil $locale = null,
			public string|null $name = null,
			public string|null $orgNumber = null,
			public string|null $phoneNumber = null,
			public Company\RegistrationType|null|Nil $registrationType = null,
			public int|null|Nil $reseller = null,
			public Partial_ResellerParams|null|Nil $resellerParams = null,
			public string|null|Nil $secondaryLocale = null,
			public array|null|Nil $tags = null,
			public string|null|Nil $terminated = null,
			public string|null|Nil $timeZone = null,
			public Company\Type|null|Nil $type = null,
			public string|null|Nil $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['address'] ?? null, $j['alias'] ?? null, static::e(Company\Category::from(...), $j['business-category'] ?? null), $j['currency'] ?? null, $j['deleted'] ?? null, $j['derivation-base-key'] ?? null, $j['email'] ?? null, Partial_CompanyFeature::o($j['feature'] ?? null), $j['locale'] ?? null, $j['name'] ?? null, $j['org-number'] ?? null, $j['phone-number'] ?? null, static::e(Company\RegistrationType::from(...), $j['registration-type'] ?? null), $j['reseller'] ?? null, Partial_ResellerParams::o($j['reseller-params'] ?? null), $j['secondary-locale'] ?? null, $j['tags'] ?? null, $j['terminated'] ?? null, $j['time-zone'] ?? null, static::e(Company\Type::from(...), $j['type'] ?? null), $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'address' => $this->address, 'alias' => $this->alias, 'business-category' => $this->businessCategory, 'currency' => $this->currency, 'deleted' => $this->deleted, 'derivation-base-key' => $this->derivationBaseKey, 'email' => $this->email, 'feature' => $this->feature, 'locale' => $this->locale, 'name' => $this->name, 'org-number' => $this->orgNumber, 'phone-number' => $this->phoneNumber, 'registration-type' => $this->registrationType, 'reseller' => $this->reseller, 'reseller-params' => $this->resellerParams, 'secondary-locale' => $this->secondaryLocale, 'tags' => $this->tags, 'terminated' => $this->terminated, 'time-zone' => $this->timeZone, 'type' => $this->type, 'web-address' => $this->webAddress ];
		}
	}

	class Stored_Company extends Onslip360Object {
		/**
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $address,
			public string $alias,
			public string $created,
			public int $id,
			public string $name,
			public string $orgNumber,
			public string $phoneNumber,
			public string $updated,
			public Company\Category|null $businessCategory = null,
			public string|null $currency = null,
			public string|null $deleted = null,
			public string|null $derivationBaseKey = null,
			public string|null $email = null,
			public CompanyFeature|null $feature = null,
			public string|null $locale = null,
			public Company\RegistrationType|null $registrationType = null,
			public int|null $reseller = null,
			public ResellerParams|null $resellerParams = null,
			public string|null $secondaryLocale = null,
			public array|null $tags = null,
			public string|null $terminated = null,
			public string|null $timeZone = null,
			public Company\Type|null $type = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public string|null $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['address'], $j['alias'], $j['created'], $j['id'], $j['name'], $j['org-number'], $j['phone-number'], $j['updated'], static::e(Company\Category::from(...), $j['business-category'] ?? null), $j['currency'] ?? null, $j['deleted'] ?? null, $j['derivation-base-key'] ?? null, $j['email'] ?? null, CompanyFeature::o($j['feature'] ?? null), $j['locale'] ?? null, static::e(Company\RegistrationType::from(...), $j['registration-type'] ?? null), $j['reseller'] ?? null, ResellerParams::o($j['reseller-params'] ?? null), $j['secondary-locale'] ?? null, $j['tags'] ?? null, $j['terminated'] ?? null, $j['time-zone'] ?? null, static::e(Company\Type::from(...), $j['type'] ?? null), $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'address' => $this->address, 'alias' => $this->alias, 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'org-number' => $this->orgNumber, 'phone-number' => $this->phoneNumber, 'updated' => $this->updated, 'business-category' => $this->businessCategory, 'currency' => $this->currency, 'deleted' => $this->deleted, 'derivation-base-key' => $this->derivationBaseKey, 'email' => $this->email, 'feature' => $this->feature, 'locale' => $this->locale, 'registration-type' => $this->registrationType, 'reseller' => $this->reseller, 'reseller-params' => $this->resellerParams, 'secondary-locale' => $this->secondaryLocale, 'tags' => $this->tags, 'terminated' => $this->terminated, 'time-zone' => $this->timeZone, 'type' => $this->type, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'web-address' => $this->webAddress ];
		}
	}

	class CompanyConfig extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public AccountConfig|null $accountConfig = null,
			public string|null $created = null,
			public string|null $deleted = null,
			public bool|null $gratuityHandling = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ AccountConfig::o($j['account-config'] ?? null), $j['created'] ?? null, $j['deleted'] ?? null, $j['gratuity-handling'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'account-config' => $this->accountConfig, 'created' => $this->created, 'deleted' => $this->deleted, 'gratuity-handling' => $this->gratuityHandling, 'id' => $this->id, 'labels' => $this->labels, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_CompanyConfig extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public Partial_AccountConfig|null|Nil $accountConfig = null,
			public string|null|Nil $deleted = null,
			public bool|null|Nil $gratuityHandling = null,
			public array|null|Nil $labels = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_AccountConfig::o($j['account-config'] ?? null), $j['deleted'] ?? null, $j['gratuity-handling'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'account-config' => $this->accountConfig, 'deleted' => $this->deleted, 'gratuity-handling' => $this->gratuityHandling, 'labels' => $this->labels, 'tags' => $this->tags ];
		}
	}

	class Stored_CompanyConfig extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $updated,
			public AccountConfig|null $accountConfig = null,
			public string|null $deleted = null,
			public bool|null $gratuityHandling = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['updated'], AccountConfig::o($j['account-config'] ?? null), $j['deleted'] ?? null, $j['gratuity-handling'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'updated' => $this->updated, 'account-config' => $this->accountConfig, 'deleted' => $this->deleted, 'gratuity-handling' => $this->gratuityHandling, 'labels' => $this->labels, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class CompanyFeature extends Onslip360Object {
		/**
		 * @param CompanyFeature\Flag[] $flags
		*/
		function __construct(
			public array $flags,
			public float|null $vivaWalletFeeRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(CompanyFeature\Flag::from(...), $j['flags']), $j['viva-wallet-fee-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'flags' => $this->flags, 'viva-wallet-fee-rate' => $this->vivaWalletFeeRate ];
		}
	}

	class Partial_CompanyFeature extends Onslip360Object {
		/**
		 * @param CompanyFeature\Flag[]|null $flags
		*/
		function __construct(
			public array|null $flags = null,
			public float|null|Nil $vivaWalletFeeRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(CompanyFeature\Flag::from(...), $j['flags'] ?? null), $j['viva-wallet-fee-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'flags' => $this->flags, 'viva-wallet-fee-rate' => $this->vivaWalletFeeRate ];
		}
	}

	class CompanyRegistration extends Onslip360Object {
		function __construct(
			public CompanyRegistrationInfo $company,
			public TillRegistrationInfo $till,
			public UserRegistrationInfo $user,
		) {}

		protected static function _fromJson(array $j): array {
			return [ CompanyRegistrationInfo::o($j['company']), TillRegistrationInfo::o($j['till']), UserRegistrationInfo::o($j['user']) ];
		}

		protected function _toJson(): array {
			return [ 'company' => $this->company, 'till' => $this->till, 'user' => $this->user ];
		}
	}

	class Partial_CompanyRegistration extends Onslip360Object {
		function __construct(
			public Partial_CompanyRegistrationInfo|null $company = null,
			public Partial_TillRegistrationInfo|null $till = null,
			public Partial_UserRegistrationInfo|null $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_CompanyRegistrationInfo::o($j['company'] ?? null), Partial_TillRegistrationInfo::o($j['till'] ?? null), Partial_UserRegistrationInfo::o($j['user'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'company' => $this->company, 'till' => $this->till, 'user' => $this->user ];
		}
	}

	class CompanyRegistrationInfo extends Onslip360Object {
		function __construct(
			public string $alias,
			public string $city,
			public string $name,
			public string $orgNumber,
			public string $phoneNumber,
			public string $street,
			public string $zipCode,
			public Company\Category|null $businessCategory = null,
			public string|null $currency = null,
			public string|null $locale = null,
			public Company\RegistrationType|null $registrationType = null,
			public string|null $timeZone = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'], $j['city'], $j['name'], $j['org-number'], $j['phone-number'], $j['street'], $j['zip-code'], static::e(Company\Category::from(...), $j['business-category'] ?? null), $j['currency'] ?? null, $j['locale'] ?? null, static::e(Company\RegistrationType::from(...), $j['registration-type'] ?? null), $j['time-zone'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'city' => $this->city, 'name' => $this->name, 'org-number' => $this->orgNumber, 'phone-number' => $this->phoneNumber, 'street' => $this->street, 'zip-code' => $this->zipCode, 'business-category' => $this->businessCategory, 'currency' => $this->currency, 'locale' => $this->locale, 'registration-type' => $this->registrationType, 'time-zone' => $this->timeZone ];
		}
	}

	class Partial_CompanyRegistrationInfo extends Onslip360Object {
		function __construct(
			public string|null $alias = null,
			public Company\Category|null|Nil $businessCategory = null,
			public string|null $city = null,
			public string|null|Nil $currency = null,
			public string|null|Nil $locale = null,
			public string|null $name = null,
			public string|null $orgNumber = null,
			public string|null $phoneNumber = null,
			public Company\RegistrationType|null|Nil $registrationType = null,
			public string|null $street = null,
			public string|null|Nil $timeZone = null,
			public string|null $zipCode = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'] ?? null, static::e(Company\Category::from(...), $j['business-category'] ?? null), $j['city'] ?? null, $j['currency'] ?? null, $j['locale'] ?? null, $j['name'] ?? null, $j['org-number'] ?? null, $j['phone-number'] ?? null, static::e(Company\RegistrationType::from(...), $j['registration-type'] ?? null), $j['street'] ?? null, $j['time-zone'] ?? null, $j['zip-code'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'business-category' => $this->businessCategory, 'city' => $this->city, 'currency' => $this->currency, 'locale' => $this->locale, 'name' => $this->name, 'org-number' => $this->orgNumber, 'phone-number' => $this->phoneNumber, 'registration-type' => $this->registrationType, 'street' => $this->street, 'time-zone' => $this->timeZone, 'zip-code' => $this->zipCode ];
		}
	}

	class CompanySummary extends Onslip360Object {
		/**
		 * @param TillSummary[] $tillSummaries
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $alias,
			public CompanyFeature $feature,
			public array $tillSummaries,
			public Company\Type $type,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public int|null $reseller = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'], CompanyFeature::o($j['feature']), TillSummary::a($j['till-summaries']), static::e(Company\Type::from(...), $j['type']), $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['reseller'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'feature' => $this->feature, 'till-summaries' => $this->tillSummaries, 'type' => $this->type, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'reseller' => $this->reseller, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_CompanySummary extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $tags
		 * @param Partial_TillSummary[]|null $tillSummaries
		*/
		function __construct(
			public string|null $alias = null,
			public string|null|Nil $deleted = null,
			public Partial_CompanyFeature|null $feature = null,
			public int|null|Nil $reseller = null,
			public array|null|Nil $tags = null,
			public array|null $tillSummaries = null,
			public Company\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'] ?? null, $j['deleted'] ?? null, Partial_CompanyFeature::o($j['feature'] ?? null), $j['reseller'] ?? null, $j['tags'] ?? null, Partial_TillSummary::a($j['till-summaries'] ?? null), static::e(Company\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'deleted' => $this->deleted, 'feature' => $this->feature, 'reseller' => $this->reseller, 'tags' => $this->tags, 'till-summaries' => $this->tillSummaries, 'type' => $this->type ];
		}
	}

	class Stored_CompanySummary extends Onslip360Object {
		/**
		 * @param TillSummary[] $tillSummaries
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $alias,
			public string $created,
			public CompanyFeature $feature,
			public int $id,
			public array $tillSummaries,
			public Company\Type $type,
			public string $updated,
			public string|null $deleted = null,
			public int|null $reseller = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'], $j['created'], CompanyFeature::o($j['feature']), $j['id'], TillSummary::a($j['till-summaries']), static::e(Company\Type::from(...), $j['type']), $j['updated'], $j['deleted'] ?? null, $j['reseller'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'created' => $this->created, 'feature' => $this->feature, 'id' => $this->id, 'till-summaries' => $this->tillSummaries, 'type' => $this->type, 'updated' => $this->updated, 'deleted' => $this->deleted, 'reseller' => $this->reseller, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class CouponVoucher extends Onslip360Object {
		function __construct(
			public float $creditLimit,
			public int $product,
			public float $quantity,
			public float|null $balance = null,
			public float|null $couponValue = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['credit-limit'], $j['product'], $j['quantity'], $j['balance'] ?? null, $j['coupon-value'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'credit-limit' => $this->creditLimit, 'product' => $this->product, 'quantity' => $this->quantity, 'balance' => $this->balance, 'coupon-value' => $this->couponValue ];
		}
	}

	class Partial_CouponVoucher extends Onslip360Object {
		function __construct(
			public float|null|Nil $couponValue = null,
			public float|null $creditLimit = null,
			public int|null $product = null,
			public float|null $quantity = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['coupon-value'] ?? null, $j['credit-limit'] ?? null, $j['product'] ?? null, $j['quantity'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'coupon-value' => $this->couponValue, 'credit-limit' => $this->creditLimit, 'product' => $this->product, 'quantity' => $this->quantity ];
		}
	}

	class CouponVoucherMetadata extends Onslip360Object {
		/**
		 * @param string[]|null $identifiers
		*/
		function __construct(
			public string $transactionDate,
			public string $transactionId,
			public int $voucher,
			public float|null $balance = null,
			public float|null $couponValue = null,
			public string|null $expires = null,
			public array|null $identifiers = null,
			public float|null $quantity = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['transaction-date'], $j['transaction-id'], $j['voucher'], $j['balance'] ?? null, $j['coupon-value'] ?? null, $j['expires'] ?? null, $j['identifiers'] ?? null, $j['quantity'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'transaction-date' => $this->transactionDate, 'transaction-id' => $this->transactionId, 'voucher' => $this->voucher, 'balance' => $this->balance, 'coupon-value' => $this->couponValue, 'expires' => $this->expires, 'identifiers' => $this->identifiers, 'quantity' => $this->quantity ];
		}
	}

	class Partial_CouponVoucherMetadata extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $identifiers
		*/
		function __construct(
			public float|null|Nil $balance = null,
			public float|null|Nil $couponValue = null,
			public string|null|Nil $expires = null,
			public array|null|Nil $identifiers = null,
			public float|null|Nil $quantity = null,
			public string|null $transactionDate = null,
			public string|null $transactionId = null,
			public int|null $voucher = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['balance'] ?? null, $j['coupon-value'] ?? null, $j['expires'] ?? null, $j['identifiers'] ?? null, $j['quantity'] ?? null, $j['transaction-date'] ?? null, $j['transaction-id'] ?? null, $j['voucher'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'balance' => $this->balance, 'coupon-value' => $this->couponValue, 'expires' => $this->expires, 'identifiers' => $this->identifiers, 'quantity' => $this->quantity, 'transaction-date' => $this->transactionDate, 'transaction-id' => $this->transactionId, 'voucher' => $this->voucher ];
		}
	}

	class CurrencyMetadata extends Onslip360Object {
		function __construct(
			public string $currencyCode,
			public float $exchangeRate,
			public string|null $currencySymbol = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['currency-code'], $j['exchange-rate'], $j['currency-symbol'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'currency-code' => $this->currencyCode, 'exchange-rate' => $this->exchangeRate, 'currency-symbol' => $this->currencySymbol ];
		}
	}

	class Partial_CurrencyMetadata extends Onslip360Object {
		function __construct(
			public string|null $currencyCode = null,
			public string|null|Nil $currencySymbol = null,
			public float|null $exchangeRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['currency-code'] ?? null, $j['currency-symbol'] ?? null, $j['exchange-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'currency-code' => $this->currencyCode, 'currency-symbol' => $this->currencySymbol, 'exchange-rate' => $this->exchangeRate ];
		}
	}

	class Customer extends Onslip360Object {
		/**
		 * @param string[]|null $clientReferences
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $name,
			public string|null $city = null,
			public array|null $clientReferences = null,
			public string|null $comment = null,
			public string|null $country = null,
			public string|null $created = null,
			public string|null $customerNumber = null,
			public string|null $deleted = null,
			public string|null $email = null,
			public int|null $id = null,
			public array|null $labels = null,
			public string|null $orgNumber = null,
			public string|null $phoneNumber = null,
			public string|null $referenceName = null,
			public string|null $streetAddress = null,
			public bool|null $subscription = null,
			public array|null $tags = null,
			public Customer\Type|null $type = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public string|null $zipCode = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], $j['city'] ?? null, $j['client-references'] ?? null, $j['comment'] ?? null, $j['country'] ?? null, $j['created'] ?? null, $j['customer-number'] ?? null, $j['deleted'] ?? null, $j['email'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['org-number'] ?? null, $j['phone-number'] ?? null, $j['reference-name'] ?? null, $j['street-address'] ?? null, $j['subscription'] ?? null, $j['tags'] ?? null, static::e(Customer\Type::from(...), $j['type'] ?? null), $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['zip-code'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'city' => $this->city, 'client-references' => $this->clientReferences, 'comment' => $this->comment, 'country' => $this->country, 'created' => $this->created, 'customer-number' => $this->customerNumber, 'deleted' => $this->deleted, 'email' => $this->email, 'id' => $this->id, 'labels' => $this->labels, 'org-number' => $this->orgNumber, 'phone-number' => $this->phoneNumber, 'reference-name' => $this->referenceName, 'street-address' => $this->streetAddress, 'subscription' => $this->subscription, 'tags' => $this->tags, 'type' => $this->type, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'zip-code' => $this->zipCode ];
		}
	}

	class Partial_Customer extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $clientReferences
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $city = null,
			public array|null|Nil $clientReferences = null,
			public string|null|Nil $comment = null,
			public string|null|Nil $country = null,
			public string|null|Nil $customerNumber = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $email = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public string|null|Nil $orgNumber = null,
			public string|null|Nil $phoneNumber = null,
			public string|null|Nil $referenceName = null,
			public string|null|Nil $streetAddress = null,
			public bool|null|Nil $subscription = null,
			public array|null|Nil $tags = null,
			public Customer\Type|null|Nil $type = null,
			public string|null|Nil $zipCode = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['city'] ?? null, $j['client-references'] ?? null, $j['comment'] ?? null, $j['country'] ?? null, $j['customer-number'] ?? null, $j['deleted'] ?? null, $j['email'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['org-number'] ?? null, $j['phone-number'] ?? null, $j['reference-name'] ?? null, $j['street-address'] ?? null, $j['subscription'] ?? null, $j['tags'] ?? null, static::e(Customer\Type::from(...), $j['type'] ?? null), $j['zip-code'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'city' => $this->city, 'client-references' => $this->clientReferences, 'comment' => $this->comment, 'country' => $this->country, 'customer-number' => $this->customerNumber, 'deleted' => $this->deleted, 'email' => $this->email, 'labels' => $this->labels, 'name' => $this->name, 'org-number' => $this->orgNumber, 'phone-number' => $this->phoneNumber, 'reference-name' => $this->referenceName, 'street-address' => $this->streetAddress, 'subscription' => $this->subscription, 'tags' => $this->tags, 'type' => $this->type, 'zip-code' => $this->zipCode ];
		}
	}

	class Stored_Customer extends Onslip360Object {
		/**
		 * @param string[]|null $clientReferences
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $name,
			public string $updated,
			public string|null $city = null,
			public array|null $clientReferences = null,
			public string|null $comment = null,
			public string|null $country = null,
			public string|null $customerNumber = null,
			public string|null $deleted = null,
			public string|null $email = null,
			public array|null $labels = null,
			public string|null $orgNumber = null,
			public string|null $phoneNumber = null,
			public string|null $referenceName = null,
			public string|null $streetAddress = null,
			public bool|null $subscription = null,
			public array|null $tags = null,
			public Customer\Type|null $type = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public string|null $zipCode = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['name'], $j['updated'], $j['city'] ?? null, $j['client-references'] ?? null, $j['comment'] ?? null, $j['country'] ?? null, $j['customer-number'] ?? null, $j['deleted'] ?? null, $j['email'] ?? null, $j['labels'] ?? null, $j['org-number'] ?? null, $j['phone-number'] ?? null, $j['reference-name'] ?? null, $j['street-address'] ?? null, $j['subscription'] ?? null, $j['tags'] ?? null, static::e(Customer\Type::from(...), $j['type'] ?? null), $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['zip-code'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'updated' => $this->updated, 'city' => $this->city, 'client-references' => $this->clientReferences, 'comment' => $this->comment, 'country' => $this->country, 'customer-number' => $this->customerNumber, 'deleted' => $this->deleted, 'email' => $this->email, 'labels' => $this->labels, 'org-number' => $this->orgNumber, 'phone-number' => $this->phoneNumber, 'reference-name' => $this->referenceName, 'street-address' => $this->streetAddress, 'subscription' => $this->subscription, 'tags' => $this->tags, 'type' => $this->type, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'zip-code' => $this->zipCode ];
		}
	}

	class CustomerFeedbackParams extends Onslip360Object {
		function __construct(
			public string $message,
			public CustomerFeedbackParams\Mood $mood,
			public int|null $till = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['message'], static::e(CustomerFeedbackParams\Mood::from(...), $j['mood']), $j['till'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'message' => $this->message, 'mood' => $this->mood, 'till' => $this->till ];
		}
	}

	class Partial_CustomerFeedbackParams extends Onslip360Object {
		function __construct(
			public string|null $message = null,
			public CustomerFeedbackParams\Mood|null $mood = null,
			public int|null|Nil $till = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['message'] ?? null, static::e(CustomerFeedbackParams\Mood::from(...), $j['mood'] ?? null), $j['till'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'message' => $this->message, 'mood' => $this->mood, 'till' => $this->till ];
		}
	}

	class CustomerInfo extends Onslip360Object {
		function __construct(
			public bool|null $subscription = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['subscription'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'subscription' => $this->subscription ];
		}
	}

	class Partial_CustomerInfo extends Onslip360Object {
		function __construct(
			public bool|null|Nil $subscription = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['subscription'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'subscription' => $this->subscription ];
		}
	}

	class DMCampaign extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param DMCampaignRecipient[]|null $recipients
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $message,
			public string $name,
			public DMCampaign\Type $type,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $recipients = null,
			public string|null $sender = null,
			public DMCampaign\Status|null $status = null,
			public array|null $tags = null,
			public int|null $triggerEvent = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['message'], $j['name'], static::e(DMCampaign\Type::from(...), $j['type']), $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, DMCampaignRecipient::a($j['recipients'] ?? null), $j['sender'] ?? null, static::e(DMCampaign\Status::from(...), $j['status'] ?? null), $j['tags'] ?? null, $j['trigger-event'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['user'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'message' => $this->message, 'name' => $this->name, 'type' => $this->type, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'recipients' => $this->recipients, 'sender' => $this->sender, 'status' => $this->status, 'tags' => $this->tags, 'trigger-event' => $this->triggerEvent, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'user' => $this->user ];
		}
	}

	class Partial_DMCampaign extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param Partial_DMCampaignRecipient[]|null|Nil $recipients
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public array|null|Nil $labels = null,
			public string|null $message = null,
			public string|null $name = null,
			public array|null|Nil $recipients = null,
			public string|null|Nil $sender = null,
			public DMCampaign\Status|null|Nil $status = null,
			public array|null|Nil $tags = null,
			public int|null|Nil $triggerEvent = null,
			public DMCampaign\Type|null $type = null,
			public int|null|Nil $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['labels'] ?? null, $j['message'] ?? null, $j['name'] ?? null, Partial_DMCampaignRecipient::a($j['recipients'] ?? null), $j['sender'] ?? null, static::e(DMCampaign\Status::from(...), $j['status'] ?? null), $j['tags'] ?? null, $j['trigger-event'] ?? null, static::e(DMCampaign\Type::from(...), $j['type'] ?? null), $j['user'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'labels' => $this->labels, 'message' => $this->message, 'name' => $this->name, 'recipients' => $this->recipients, 'sender' => $this->sender, 'status' => $this->status, 'tags' => $this->tags, 'trigger-event' => $this->triggerEvent, 'type' => $this->type, 'user' => $this->user ];
		}
	}

	class Stored_DMCampaign extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param DMCampaignRecipient[]|null $recipients
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $message,
			public string $name,
			public DMCampaign\Type $type,
			public string $updated,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $recipients = null,
			public string|null $sender = null,
			public DMCampaign\Status|null $status = null,
			public array|null $tags = null,
			public int|null $triggerEvent = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['message'], $j['name'], static::e(DMCampaign\Type::from(...), $j['type']), $j['updated'], $j['deleted'] ?? null, $j['labels'] ?? null, DMCampaignRecipient::a($j['recipients'] ?? null), $j['sender'] ?? null, static::e(DMCampaign\Status::from(...), $j['status'] ?? null), $j['tags'] ?? null, $j['trigger-event'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['user'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'message' => $this->message, 'name' => $this->name, 'type' => $this->type, 'updated' => $this->updated, 'deleted' => $this->deleted, 'labels' => $this->labels, 'recipients' => $this->recipients, 'sender' => $this->sender, 'status' => $this->status, 'tags' => $this->tags, 'trigger-event' => $this->triggerEvent, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'user' => $this->user ];
		}
	}

	class DMCampaignAction extends Onslip360Object {
		function __construct(
			public DMCampaign $dmCampaign,
		) {}

		protected static function _fromJson(array $j): array {
			return [ DMCampaign::o($j['dm-campaign']) ];
		}

		protected function _toJson(): array {
			return [ 'dm-campaign' => $this->dmCampaign ];
		}
	}

	class Partial_DMCampaignAction extends Onslip360Object {
		function __construct(
			public Partial_DMCampaign|null $dmCampaign = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_DMCampaign::o($j['dm-campaign'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'dm-campaign' => $this->dmCampaign ];
		}
	}

	class DMCampaignRecipient extends Onslip360Object {
		function __construct(
			public int $customer,
			public string $recipientUri,
			public DMCampaignRecipient\Status|null $status = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['customer'], $j['recipient-uri'], static::e(DMCampaignRecipient\Status::from(...), $j['status'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'customer' => $this->customer, 'recipient-uri' => $this->recipientUri, 'status' => $this->status ];
		}
	}

	class Partial_DMCampaignRecipient extends Onslip360Object {
		function __construct(
			public int|null $customer = null,
			public string|null $recipientUri = null,
			public DMCampaignRecipient\Status|null|Nil $status = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['customer'] ?? null, $j['recipient-uri'] ?? null, static::e(DMCampaignRecipient\Status::from(...), $j['status'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'customer' => $this->customer, 'recipient-uri' => $this->recipientUri, 'status' => $this->status ];
		}
	}

	class DailyTillPassword extends Onslip360Object {
		function __construct(
			public string $keyId,
			public string $password,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['key-id'], $j['password'] ];
		}

		protected function _toJson(): array {
			return [ 'key-id' => $this->keyId, 'password' => $this->password ];
		}
	}

	class Partial_DailyTillPassword extends Onslip360Object {
		function __construct(
			public string|null $keyId = null,
			public string|null $password = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['key-id'] ?? null, $j['password'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'key-id' => $this->keyId, 'password' => $this->password ];
		}
	}

	class DataObject extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_DataObject extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public array|null|Nil $labels = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'labels' => $this->labels, 'tags' => $this->tags ];
		}
	}

	class Stored_DataObject extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $updated,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['updated'], $j['deleted'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'updated' => $this->updated, 'deleted' => $this->deleted, 'labels' => $this->labels, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class DataObjectOperation extends Onslip360Object {
		function __construct(
			public DataObjectOperation\Operation $operation,
			public DataObject $payload,
			public string $resource,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(DataObjectOperation\Operation::from(...), $j['operation']), DataObject::o($j['payload']), $j['resource'] ];
		}

		protected function _toJson(): array {
			return [ 'operation' => $this->operation, 'payload' => $this->payload, 'resource' => $this->resource ];
		}
	}

	class Partial_DataObjectOperation extends Onslip360Object {
		function __construct(
			public DataObjectOperation\Operation|null $operation = null,
			public Partial_DataObject|null $payload = null,
			public string|null $resource = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(DataObjectOperation\Operation::from(...), $j['operation'] ?? null), Partial_DataObject::o($j['payload'] ?? null), $j['resource'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'operation' => $this->operation, 'payload' => $this->payload, 'resource' => $this->resource ];
		}
	}

	class DataObjectReport extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param DataObjectRevision[]|null $revisions
		 * @param string[]|null $tags
		*/
		function __construct(
			public DataObjectReport\Type $type,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $revisions = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(DataObjectReport\Type::from(...), $j['type']), $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, DataObjectRevision::a($j['revisions'] ?? null), $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'revisions' => $this->revisions, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_DataObjectReport extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param Partial_DataObjectRevision[]|null|Nil $revisions
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public array|null|Nil $labels = null,
			public array|null|Nil $revisions = null,
			public array|null|Nil $tags = null,
			public DataObjectReport\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['labels'] ?? null, Partial_DataObjectRevision::a($j['revisions'] ?? null), $j['tags'] ?? null, static::e(DataObjectReport\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'labels' => $this->labels, 'revisions' => $this->revisions, 'tags' => $this->tags, 'type' => $this->type ];
		}
	}

	class Stored_DataObjectReport extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param DataObjectRevision[]|null $revisions
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public DataObjectReport\Type $type,
			public string $updated,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $revisions = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], static::e(DataObjectReport\Type::from(...), $j['type']), $j['updated'], $j['deleted'] ?? null, $j['labels'] ?? null, DataObjectRevision::a($j['revisions'] ?? null), $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'type' => $this->type, 'updated' => $this->updated, 'deleted' => $this->deleted, 'labels' => $this->labels, 'revisions' => $this->revisions, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class DataObjectRevision extends Onslip360Object {
		function __construct(
			public string $updated,
			public string|null $deleted = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['updated'], $j['deleted'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'updated' => $this->updated, 'deleted' => $this->deleted, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_DataObjectRevision extends Onslip360Object {
		function __construct(
			public string|null|Nil $deleted = null,
			public string|null $updated = null,
			public int|null|Nil $updatedBy = null,
			public int|null|Nil $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class DataStream extends Onslip360Object {
		function __construct(
			public string $data,
			public int $size,
			public string $type,
			public string|null $name = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['data'], $j['size'], $j['type'], $j['name'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'data' => $this->data, 'size' => $this->size, 'type' => $this->type, 'name' => $this->name ];
		}
	}

	class DigitalReceipt extends Onslip360Object {
		/**
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $address,
			public int $cashier,
			public string $cashierName,
			public int $client,
			public string $clientName,
			public string $companyName,
			public string $date,
			public string $orgNumber,
			public Receipt $receipt,
			public string $recipientUri,
			public int|null $company = null,
			public string|null $controlCode = null,
			public string|null $controlUnitId = null,
			public string|null $created = null,
			public string|null $currency = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public string|null $email = null,
			public int|null $id = null,
			public bool|null $isCopy = null,
			public string|null $locale = null,
			public int|null $location = null,
			public string|null $phoneNumber = null,
			public string|null $receiptFooter = null,
			public string|null $receiptHeader = null,
			public DigitalReceipt\Status|null $status = null,
			public string|null $storeAddress = null,
			public string|null $storeName = null,
			public array|null $tags = null,
			public int|null $timezoneOffset = null,
			public DigitalReceipt\Type|null $type = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public string|null $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['address'], $j['cashier'], $j['cashier-name'], $j['client'], $j['client-name'], $j['company-name'], $j['date'], $j['org-number'], Receipt::o($j['receipt']), $j['recipient-uri'], $j['company'] ?? null, $j['control-code'] ?? null, $j['control-unit-id'] ?? null, $j['created'] ?? null, $j['currency'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['email'] ?? null, $j['id'] ?? null, $j['is-copy'] ?? null, $j['locale'] ?? null, $j['location'] ?? null, $j['phone-number'] ?? null, $j['receipt-footer'] ?? null, $j['receipt-header'] ?? null, static::e(DigitalReceipt\Status::from(...), $j['status'] ?? null), $j['store-address'] ?? null, $j['store-name'] ?? null, $j['tags'] ?? null, $j['timezone-offset'] ?? null, static::e(DigitalReceipt\Type::from(...), $j['type'] ?? null), $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'address' => $this->address, 'cashier' => $this->cashier, 'cashier-name' => $this->cashierName, 'client' => $this->client, 'client-name' => $this->clientName, 'company-name' => $this->companyName, 'date' => $this->date, 'org-number' => $this->orgNumber, 'receipt' => $this->receipt, 'recipient-uri' => $this->recipientUri, 'company' => $this->company, 'control-code' => $this->controlCode, 'control-unit-id' => $this->controlUnitId, 'created' => $this->created, 'currency' => $this->currency, 'deleted' => $this->deleted, 'description' => $this->description, 'email' => $this->email, 'id' => $this->id, 'is-copy' => $this->isCopy, 'locale' => $this->locale, 'location' => $this->location, 'phone-number' => $this->phoneNumber, 'receipt-footer' => $this->receiptFooter, 'receipt-header' => $this->receiptHeader, 'status' => $this->status, 'store-address' => $this->storeAddress, 'store-name' => $this->storeName, 'tags' => $this->tags, 'timezone-offset' => $this->timezoneOffset, 'type' => $this->type, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'web-address' => $this->webAddress ];
		}
	}

	class Partial_DigitalReceipt extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null $address = null,
			public int|null $cashier = null,
			public string|null $cashierName = null,
			public int|null $client = null,
			public string|null $clientName = null,
			public int|null|Nil $company = null,
			public string|null $companyName = null,
			public string|null|Nil $controlCode = null,
			public string|null|Nil $controlUnitId = null,
			public string|null|Nil $currency = null,
			public string|null $date = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $description = null,
			public string|null|Nil $email = null,
			public bool|null|Nil $isCopy = null,
			public string|null|Nil $locale = null,
			public int|null|Nil $location = null,
			public string|null $orgNumber = null,
			public string|null|Nil $phoneNumber = null,
			public Partial_Receipt|null $receipt = null,
			public string|null|Nil $receiptFooter = null,
			public string|null|Nil $receiptHeader = null,
			public string|null $recipientUri = null,
			public DigitalReceipt\Status|null|Nil $status = null,
			public string|null|Nil $storeAddress = null,
			public string|null|Nil $storeName = null,
			public array|null|Nil $tags = null,
			public int|null|Nil $timezoneOffset = null,
			public DigitalReceipt\Type|null|Nil $type = null,
			public string|null|Nil $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['address'] ?? null, $j['cashier'] ?? null, $j['cashier-name'] ?? null, $j['client'] ?? null, $j['client-name'] ?? null, $j['company'] ?? null, $j['company-name'] ?? null, $j['control-code'] ?? null, $j['control-unit-id'] ?? null, $j['currency'] ?? null, $j['date'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['email'] ?? null, $j['is-copy'] ?? null, $j['locale'] ?? null, $j['location'] ?? null, $j['org-number'] ?? null, $j['phone-number'] ?? null, Partial_Receipt::o($j['receipt'] ?? null), $j['receipt-footer'] ?? null, $j['receipt-header'] ?? null, $j['recipient-uri'] ?? null, static::e(DigitalReceipt\Status::from(...), $j['status'] ?? null), $j['store-address'] ?? null, $j['store-name'] ?? null, $j['tags'] ?? null, $j['timezone-offset'] ?? null, static::e(DigitalReceipt\Type::from(...), $j['type'] ?? null), $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'address' => $this->address, 'cashier' => $this->cashier, 'cashier-name' => $this->cashierName, 'client' => $this->client, 'client-name' => $this->clientName, 'company' => $this->company, 'company-name' => $this->companyName, 'control-code' => $this->controlCode, 'control-unit-id' => $this->controlUnitId, 'currency' => $this->currency, 'date' => $this->date, 'deleted' => $this->deleted, 'description' => $this->description, 'email' => $this->email, 'is-copy' => $this->isCopy, 'locale' => $this->locale, 'location' => $this->location, 'org-number' => $this->orgNumber, 'phone-number' => $this->phoneNumber, 'receipt' => $this->receipt, 'receipt-footer' => $this->receiptFooter, 'receipt-header' => $this->receiptHeader, 'recipient-uri' => $this->recipientUri, 'status' => $this->status, 'store-address' => $this->storeAddress, 'store-name' => $this->storeName, 'tags' => $this->tags, 'timezone-offset' => $this->timezoneOffset, 'type' => $this->type, 'web-address' => $this->webAddress ];
		}
	}

	class Stored_DigitalReceipt extends Onslip360Object {
		/**
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $address,
			public string $cashierName,
			public string $clientName,
			public string $companyName,
			public string $created,
			public string $date,
			public int $id,
			public string $orgNumber,
			public Receipt $receipt,
			public string $recipientUri,
			public string $updated,
			public int|null $cashier = null,
			public int|null $client = null,
			public int|null $company = null,
			public string|null $controlCode = null,
			public string|null $controlUnitId = null,
			public string|null $currency = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public string|null $email = null,
			public bool|null $isCopy = null,
			public string|null $locale = null,
			public int|null $location = null,
			public string|null $phoneNumber = null,
			public string|null $receiptFooter = null,
			public string|null $receiptHeader = null,
			public DigitalReceipt\Status|null $status = null,
			public string|null $storeAddress = null,
			public string|null $storeName = null,
			public array|null $tags = null,
			public int|null $timezoneOffset = null,
			public DigitalReceipt\Type|null $type = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public string|null $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['address'], $j['cashier-name'], $j['client-name'], $j['company-name'], $j['created'], $j['date'], $j['id'], $j['org-number'], Receipt::o($j['receipt']), $j['recipient-uri'], $j['updated'], $j['cashier'] ?? null, $j['client'] ?? null, $j['company'] ?? null, $j['control-code'] ?? null, $j['control-unit-id'] ?? null, $j['currency'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['email'] ?? null, $j['is-copy'] ?? null, $j['locale'] ?? null, $j['location'] ?? null, $j['phone-number'] ?? null, $j['receipt-footer'] ?? null, $j['receipt-header'] ?? null, static::e(DigitalReceipt\Status::from(...), $j['status'] ?? null), $j['store-address'] ?? null, $j['store-name'] ?? null, $j['tags'] ?? null, $j['timezone-offset'] ?? null, static::e(DigitalReceipt\Type::from(...), $j['type'] ?? null), $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'address' => $this->address, 'cashier-name' => $this->cashierName, 'client-name' => $this->clientName, 'company-name' => $this->companyName, 'created' => $this->created, 'date' => $this->date, 'id' => $this->id, 'org-number' => $this->orgNumber, 'receipt' => $this->receipt, 'recipient-uri' => $this->recipientUri, 'updated' => $this->updated, 'cashier' => $this->cashier, 'client' => $this->client, 'company' => $this->company, 'control-code' => $this->controlCode, 'control-unit-id' => $this->controlUnitId, 'currency' => $this->currency, 'deleted' => $this->deleted, 'description' => $this->description, 'email' => $this->email, 'is-copy' => $this->isCopy, 'locale' => $this->locale, 'location' => $this->location, 'phone-number' => $this->phoneNumber, 'receipt-footer' => $this->receiptFooter, 'receipt-header' => $this->receiptHeader, 'status' => $this->status, 'store-address' => $this->storeAddress, 'store-name' => $this->storeName, 'tags' => $this->tags, 'timezone-offset' => $this->timezoneOffset, 'type' => $this->type, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'web-address' => $this->webAddress ];
		}
	}

	class DigitalReceiptAction extends Onslip360Object {
		function __construct(
			public int $receipt,
			public string $receiptUri,
			public int $recipient,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['receipt'], $j['receipt-uri'], $j['recipient'] ];
		}

		protected function _toJson(): array {
			return [ 'receipt' => $this->receipt, 'receipt-uri' => $this->receiptUri, 'recipient' => $this->recipient ];
		}
	}

	class Partial_DigitalReceiptAction extends Onslip360Object {
		function __construct(
			public int|null $receipt = null,
			public string|null $receiptUri = null,
			public int|null $recipient = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['receipt'] ?? null, $j['receipt-uri'] ?? null, $j['recipient'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'receipt' => $this->receipt, 'receipt-uri' => $this->receiptUri, 'recipient' => $this->recipient ];
		}
	}

	class DigitalReceiptRecipient extends Onslip360Object {
		/**
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $key,
			public string $uid,
			public string $uri,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['key'], $j['uid'], $j['uri'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'key' => $this->key, 'uid' => $this->uid, 'uri' => $this->uri, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_DigitalReceiptRecipient extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public string|null $key = null,
			public array|null|Nil $tags = null,
			public string|null $uid = null,
			public string|null $uri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['key'] ?? null, $j['tags'] ?? null, $j['uid'] ?? null, $j['uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'key' => $this->key, 'tags' => $this->tags, 'uid' => $this->uid, 'uri' => $this->uri ];
		}
	}

	class Stored_DigitalReceiptRecipient extends Onslip360Object {
		/**
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $uid,
			public string $updated,
			public string $uri,
			public string|null $deleted = null,
			public string|null $key = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['uid'], $j['updated'], $j['uri'], $j['deleted'] ?? null, $j['key'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'uid' => $this->uid, 'updated' => $this->updated, 'uri' => $this->uri, 'deleted' => $this->deleted, 'key' => $this->key, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class ERPAccount extends Onslip360Object {
		function __construct(
			public int $account,
			public string $name,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['account'], $j['name'] ];
		}

		protected function _toJson(): array {
			return [ 'account' => $this->account, 'name' => $this->name ];
		}
	}

	class Partial_ERPAccount extends Onslip360Object {
		function __construct(
			public int|null $account = null,
			public string|null $name = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['account'] ?? null, $j['name'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'account' => $this->account, 'name' => $this->name ];
		}
	}

	class ERPAction extends Onslip360Object {
		function __construct(
			public ERPAction\Type $type,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(ERPAction\Type::from(...), $j['type']) ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type ];
		}
	}

	class Partial_ERPAction extends Onslip360Object {
		function __construct(
			public ERPAction\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(ERPAction\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type ];
		}
	}

	class ERPActivation extends Onslip360Object {
		function __construct(
			public ERPAction\Type $type,
			public BLActivation|null $bl = null,
			public FortnoxActivation|null $fortnox = null,
			public PersonalkollenActivation|null $personalkollen = null,
			public PlandayActivation|null $planday = null,
			public VismaActivation|null $visma = null,
			public ZoinedActivation|null $zoined = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(ERPAction\Type::from(...), $j['type']), BLActivation::o($j['bl'] ?? null), FortnoxActivation::o($j['fortnox'] ?? null), PersonalkollenActivation::o($j['personalkollen'] ?? null), PlandayActivation::o($j['planday'] ?? null), VismaActivation::o($j['visma'] ?? null), ZoinedActivation::o($j['zoined'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type, 'bl' => $this->bl, 'fortnox' => $this->fortnox, 'personalkollen' => $this->personalkollen, 'planday' => $this->planday, 'visma' => $this->visma, 'zoined' => $this->zoined ];
		}
	}

	class Partial_ERPActivation extends Onslip360Object {
		function __construct(
			public Partial_BLActivation|null|Nil $bl = null,
			public Partial_FortnoxActivation|null|Nil $fortnox = null,
			public Partial_PersonalkollenActivation|null|Nil $personalkollen = null,
			public Partial_PlandayActivation|null|Nil $planday = null,
			public ERPAction\Type|null $type = null,
			public Partial_VismaActivation|null|Nil $visma = null,
			public Partial_ZoinedActivation|null|Nil $zoined = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_BLActivation::o($j['bl'] ?? null), Partial_FortnoxActivation::o($j['fortnox'] ?? null), Partial_PersonalkollenActivation::o($j['personalkollen'] ?? null), Partial_PlandayActivation::o($j['planday'] ?? null), static::e(ERPAction\Type::from(...), $j['type'] ?? null), Partial_VismaActivation::o($j['visma'] ?? null), Partial_ZoinedActivation::o($j['zoined'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'bl' => $this->bl, 'fortnox' => $this->fortnox, 'personalkollen' => $this->personalkollen, 'planday' => $this->planday, 'type' => $this->type, 'visma' => $this->visma, 'zoined' => $this->zoined ];
		}
	}

	class EchoMessage extends Onslip360Object {
		function __construct(
			public string $payload,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['payload'] ];
		}

		protected function _toJson(): array {
			return [ 'payload' => $this->payload ];
		}
	}

	class Partial_EchoMessage extends Onslip360Object {
		function __construct(
			public string|null $payload = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['payload'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'payload' => $this->payload ];
		}
	}

	class EntertainmentBill extends Onslip360Object {
		/**
		 * @param Item[] $items
		 * @param Payment[] $payments
		 * @param VATSummary[] $vatSummaries
		*/
		function __construct(
			public float $change,
			public string $id,
			public array $items,
			public string $originalReceiptId,
			public array $payments,
			public float $rounding,
			public float $totalAmount,
			public float $totalVatAmount,
			public Receipt\Type $type,
			public array $vatSummaries,
			public Customer|null $customer = null,
			public int|null $order = null,
			public string|null $reference = null,
			public int|null $tab = null,
			public float|null $totalSalesAmount = null,
			public float|null $totalSalesVatAmount = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['change'], $j['id'], Item::a($j['items']), $j['original-receipt-id'], Payment::a($j['payments']), $j['rounding'], $j['total-amount'], $j['total-vat-amount'], static::e(Receipt\Type::from(...), $j['type']), VATSummary::a($j['vat-summaries']), Customer::o($j['customer'] ?? null), $j['order'] ?? null, $j['reference'] ?? null, $j['tab'] ?? null, $j['total-sales-amount'] ?? null, $j['total-sales-vat-amount'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'change' => $this->change, 'id' => $this->id, 'items' => $this->items, 'original-receipt-id' => $this->originalReceiptId, 'payments' => $this->payments, 'rounding' => $this->rounding, 'total-amount' => $this->totalAmount, 'total-vat-amount' => $this->totalVatAmount, 'type' => $this->type, 'vat-summaries' => $this->vatSummaries, 'customer' => $this->customer, 'order' => $this->order, 'reference' => $this->reference, 'tab' => $this->tab, 'total-sales-amount' => $this->totalSalesAmount, 'total-sales-vat-amount' => $this->totalSalesVatAmount ];
		}
	}

	class Partial_EntertainmentBill extends Onslip360Object {
		/**
		 * @param Partial_Item[]|null $items
		 * @param Partial_Payment[]|null $payments
		 * @param Partial_VATSummary[]|null $vatSummaries
		*/
		function __construct(
			public float|null $change = null,
			public Partial_Customer|null|Nil $customer = null,
			public string|null $id = null,
			public array|null $items = null,
			public int|null|Nil $order = null,
			public string|null $originalReceiptId = null,
			public array|null $payments = null,
			public string|null|Nil $reference = null,
			public float|null $rounding = null,
			public int|null|Nil $tab = null,
			public float|null $totalAmount = null,
			public float|null|Nil $totalSalesAmount = null,
			public float|null|Nil $totalSalesVatAmount = null,
			public float|null $totalVatAmount = null,
			public Receipt\Type|null $type = null,
			public array|null $vatSummaries = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['change'] ?? null, Partial_Customer::o($j['customer'] ?? null), $j['id'] ?? null, Partial_Item::a($j['items'] ?? null), $j['order'] ?? null, $j['original-receipt-id'] ?? null, Partial_Payment::a($j['payments'] ?? null), $j['reference'] ?? null, $j['rounding'] ?? null, $j['tab'] ?? null, $j['total-amount'] ?? null, $j['total-sales-amount'] ?? null, $j['total-sales-vat-amount'] ?? null, $j['total-vat-amount'] ?? null, static::e(Receipt\Type::from(...), $j['type'] ?? null), Partial_VATSummary::a($j['vat-summaries'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'change' => $this->change, 'customer' => $this->customer, 'id' => $this->id, 'items' => $this->items, 'order' => $this->order, 'original-receipt-id' => $this->originalReceiptId, 'payments' => $this->payments, 'reference' => $this->reference, 'rounding' => $this->rounding, 'tab' => $this->tab, 'total-amount' => $this->totalAmount, 'total-sales-amount' => $this->totalSalesAmount, 'total-sales-vat-amount' => $this->totalSalesVatAmount, 'total-vat-amount' => $this->totalVatAmount, 'type' => $this->type, 'vat-summaries' => $this->vatSummaries ];
		}
	}

	class EventStream extends Onslip360Object {
		/**
		 * @param QueryTrigger[] $queries
		*/
		function __construct(
			public array $queries,
			public EventStream\State $state,
			public int|null $client = null,
			public string|null $created = null,
			public string|null $id = null,
			public int|null $location = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ QueryTrigger::a($j['queries']), static::e(EventStream\State::from(...), $j['state']), $j['client'] ?? null, $j['created'] ?? null, $j['id'] ?? null, $j['location'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['user'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'queries' => $this->queries, 'state' => $this->state, 'client' => $this->client, 'created' => $this->created, 'id' => $this->id, 'location' => $this->location, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'user' => $this->user ];
		}
	}

	class Partial_EventStream extends Onslip360Object {
		/**
		 * @param Partial_QueryTrigger[]|null $queries
		*/
		function __construct(
			public int|null|Nil $client = null,
			public int|null|Nil $location = null,
			public array|null $queries = null,
			public EventStream\State|null $state = null,
			public int|null|Nil $updatedBy = null,
			public int|null|Nil $updatedFrom = null,
			public int|null|Nil $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['client'] ?? null, $j['location'] ?? null, Partial_QueryTrigger::a($j['queries'] ?? null), static::e(EventStream\State::from(...), $j['state'] ?? null), $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['user'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'client' => $this->client, 'location' => $this->location, 'queries' => $this->queries, 'state' => $this->state, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'user' => $this->user ];
		}
	}

	class Stored_EventStream extends Onslip360Object {
		/**
		 * @param QueryTrigger[] $queries
		*/
		function __construct(
			public string $created,
			public string $id,
			public array $queries,
			public EventStream\State $state,
			public string $updated,
			public int|null $client = null,
			public int|null $location = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], QueryTrigger::a($j['queries']), static::e(EventStream\State::from(...), $j['state']), $j['updated'], $j['client'] ?? null, $j['location'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['user'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'queries' => $this->queries, 'state' => $this->state, 'updated' => $this->updated, 'client' => $this->client, 'location' => $this->location, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'user' => $this->user ];
		}
	}

	class File extends Onslip360Object {
		function __construct(
			public string $blob,
			public string $contentType,
			public int $length,
			public string $name,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['blob'], $j['content-type'], $j['length'], $j['name'] ];
		}

		protected function _toJson(): array {
			return [ 'blob' => $this->blob, 'content-type' => $this->contentType, 'length' => $this->length, 'name' => $this->name ];
		}
	}

	class Partial_File extends Onslip360Object {
		function __construct(
			public string|null $blob = null,
			public string|null $contentType = null,
			public int|null $length = null,
			public string|null $name = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['blob'] ?? null, $j['content-type'] ?? null, $j['length'] ?? null, $j['name'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'blob' => $this->blob, 'content-type' => $this->contentType, 'length' => $this->length, 'name' => $this->name ];
		}
	}

	class FileArchive extends Onslip360Object {
		/**
		 * @param File[] $files
		*/
		function __construct(
			public array $files,
			public string|null $description = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ File::a($j['files']), $j['description'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'files' => $this->files, 'description' => $this->description ];
		}
	}

	class Partial_FileArchive extends Onslip360Object {
		/**
		 * @param Partial_File[]|null $files
		*/
		function __construct(
			public string|null|Nil $description = null,
			public array|null $files = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['description'] ?? null, Partial_File::a($j['files'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'description' => $this->description, 'files' => $this->files ];
		}
	}

	class FortnoxActivation extends Onslip360Object {
		function __construct(
			public string $apiCode,
			public string $redirectUri,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['api-code'], $j['redirect-uri'] ];
		}

		protected function _toJson(): array {
			return [ 'api-code' => $this->apiCode, 'redirect-uri' => $this->redirectUri ];
		}
	}

	class Partial_FortnoxActivation extends Onslip360Object {
		function __construct(
			public string|null $apiCode = null,
			public string|null $redirectUri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['api-code'] ?? null, $j['redirect-uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'api-code' => $this->apiCode, 'redirect-uri' => $this->redirectUri ];
		}
	}

	class GratuitySummary extends Onslip360Object {
		function __construct(
			public float $amount,
			public int $count,
			public int $user,
			public string $userName,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'], $j['count'], $j['user'], $j['user-name'] ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'count' => $this->count, 'user' => $this->user, 'user-name' => $this->userName ];
		}
	}

	class Partial_GratuitySummary extends Onslip360Object {
		function __construct(
			public float|null $amount = null,
			public int|null $count = null,
			public int|null $user = null,
			public string|null $userName = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['count'] ?? null, $j['user'] ?? null, $j['user-name'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'count' => $this->count, 'user' => $this->user, 'user-name' => $this->userName ];
		}
	}

	class InitWeiqIntegrationParams extends Onslip360Object {
		function __construct(
			public string $accessTokenId,
			public string $accessTokenKey,
			public string $apiUri,
			public int $location,
			public int $paymentMethodId,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['access-token-id'], $j['access-token-key'], $j['api-uri'], $j['location'], $j['payment-method-id'] ];
		}

		protected function _toJson(): array {
			return [ 'access-token-id' => $this->accessTokenId, 'access-token-key' => $this->accessTokenKey, 'api-uri' => $this->apiUri, 'location' => $this->location, 'payment-method-id' => $this->paymentMethodId ];
		}
	}

	class Partial_InitWeiqIntegrationParams extends Onslip360Object {
		function __construct(
			public string|null $accessTokenId = null,
			public string|null $accessTokenKey = null,
			public string|null $apiUri = null,
			public int|null $location = null,
			public int|null $paymentMethodId = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['access-token-id'] ?? null, $j['access-token-key'] ?? null, $j['api-uri'] ?? null, $j['location'] ?? null, $j['payment-method-id'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'access-token-id' => $this->accessTokenId, 'access-token-key' => $this->accessTokenKey, 'api-uri' => $this->apiUri, 'location' => $this->location, 'payment-method-id' => $this->paymentMethodId ];
		}
	}

	class InspectionRequest extends Onslip360Object {
		function __construct(
			public DataObjectReport\Type $type,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(DataObjectReport\Type::from(...), $j['type']) ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type ];
		}
	}

	class Partial_InspectionRequest extends Onslip360Object {
		function __construct(
			public DataObjectReport\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(DataObjectReport\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type ];
		}
	}

	class InvalidPayload extends Onslip360Object {
		function __construct(
			public string $contentType,
			public string $data,
			public string $hmac,
			public string $keyId,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['content-type'], $j['data'], $j['hmac'], $j['key-id'] ];
		}

		protected function _toJson(): array {
			return [ 'content-type' => $this->contentType, 'data' => $this->data, 'hmac' => $this->hmac, 'key-id' => $this->keyId ];
		}
	}

	class Partial_InvalidPayload extends Onslip360Object {
		function __construct(
			public string|null $contentType = null,
			public string|null $data = null,
			public string|null $hmac = null,
			public string|null $keyId = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['content-type'] ?? null, $j['data'] ?? null, $j['hmac'] ?? null, $j['key-id'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'content-type' => $this->contentType, 'data' => $this->data, 'hmac' => $this->hmac, 'key-id' => $this->keyId ];
		}
	}

	class InventoryAdjustment extends Onslip360Object {
		/**
		 * @param InventoryAdjustmentItem[] $items
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public array $items,
			public int $location,
			public InventoryAdjustment\Type $type,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ InventoryAdjustmentItem::a($j['items']), $j['location'], static::e(InventoryAdjustment\Type::from(...), $j['type']), $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'items' => $this->items, 'location' => $this->location, 'type' => $this->type, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_InventoryAdjustment extends Onslip360Object {
		/**
		 * @param Partial_InventoryAdjustmentItem[]|null $items
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public array|null $items = null,
			public array|null|Nil $labels = null,
			public int|null $location = null,
			public array|null|Nil $tags = null,
			public InventoryAdjustment\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, Partial_InventoryAdjustmentItem::a($j['items'] ?? null), $j['labels'] ?? null, $j['location'] ?? null, $j['tags'] ?? null, static::e(InventoryAdjustment\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'items' => $this->items, 'labels' => $this->labels, 'location' => $this->location, 'tags' => $this->tags, 'type' => $this->type ];
		}
	}

	class Stored_InventoryAdjustment extends Onslip360Object {
		/**
		 * @param InventoryAdjustmentItem[] $items
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public array $items,
			public int $location,
			public InventoryAdjustment\Type $type,
			public string $updated,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], InventoryAdjustmentItem::a($j['items']), $j['location'], static::e(InventoryAdjustment\Type::from(...), $j['type']), $j['updated'], $j['deleted'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'items' => $this->items, 'location' => $this->location, 'type' => $this->type, 'updated' => $this->updated, 'deleted' => $this->deleted, 'labels' => $this->labels, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class InventoryAdjustmentItem extends Onslip360Object {
		function __construct(
			public int $product,
			public string $productName,
			public float $quantityAdjustment,
			public float|null $purchasePrice = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['product'], $j['product-name'], $j['quantity-adjustment'], $j['purchase-price'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'product' => $this->product, 'product-name' => $this->productName, 'quantity-adjustment' => $this->quantityAdjustment, 'purchase-price' => $this->purchasePrice ];
		}
	}

	class Partial_InventoryAdjustmentItem extends Onslip360Object {
		function __construct(
			public int|null $product = null,
			public string|null $productName = null,
			public float|null|Nil $purchasePrice = null,
			public float|null $quantityAdjustment = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['product'] ?? null, $j['product-name'] ?? null, $j['purchase-price'] ?? null, $j['quantity-adjustment'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'product' => $this->product, 'product-name' => $this->productName, 'purchase-price' => $this->purchasePrice, 'quantity-adjustment' => $this->quantityAdjustment ];
		}
	}

	class Item extends Onslip360Object {
		/**
		 * @param string[][]|null $descriptionT9N
		 * @param ItemModifier[]|null $modifiers
		 * @param string[][]|null $productNameT9N
		 * @param Item[]|null $subItems
		 * @param string[]|null $tickets
		*/
		function __construct(
			public string $productName,
			public float $quantity,
			public ProductGroup\Type $type,
			public int|null $campaign = null,
			public string|null $comment = null,
			public string|null $description = null,
			public array|null $descriptionT9N = null,
			public float|null $discountRate = null,
			public Item|null $lastKitchenTicketItem = null,
			public Metadata|null $metadata = null,
			public int|null $modifier = null,
			public array|null $modifiers = null,
			public float|null $price = null,
			public int|null $product = null,
			public int|null $productGroup = null,
			public array|null $productNameT9N = null,
			public float|null $purchasePrice = null,
			public int|null $stockLocation = null,
			public array|null $subItems = null,
			public array|null $tickets = null,
			public bool|null $undiscountable = null,
			public string|null $unit = null,
			public float|null $vatAmount = null,
			public float|null $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['product-name'], $j['quantity'], static::e(ProductGroup\Type::from(...), $j['type']), $j['campaign'] ?? null, $j['comment'] ?? null, $j['description'] ?? null, $j['description-t9n'] ?? null, $j['discount-rate'] ?? null, Item::o($j['last-kitchen-ticket-item'] ?? null), Metadata::o($j['metadata'] ?? null), $j['modifier'] ?? null, ItemModifier::a($j['modifiers'] ?? null), $j['price'] ?? null, $j['product'] ?? null, $j['product-group'] ?? null, $j['product-name-t9n'] ?? null, $j['purchase-price'] ?? null, $j['stock-location'] ?? null, Item::a($j['sub-items'] ?? null), $j['tickets'] ?? null, $j['undiscountable'] ?? null, $j['unit'] ?? null, $j['vat-amount'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'product-name' => $this->productName, 'quantity' => $this->quantity, 'type' => $this->type, 'campaign' => $this->campaign, 'comment' => $this->comment, 'description' => $this->description, 'description-t9n' => $this->descriptionT9N, 'discount-rate' => $this->discountRate, 'last-kitchen-ticket-item' => $this->lastKitchenTicketItem, 'metadata' => $this->metadata, 'modifier' => $this->modifier, 'modifiers' => $this->modifiers, 'price' => $this->price, 'product' => $this->product, 'product-group' => $this->productGroup, 'product-name-t9n' => $this->productNameT9N, 'purchase-price' => $this->purchasePrice, 'stock-location' => $this->stockLocation, 'sub-items' => $this->subItems, 'tickets' => $this->tickets, 'undiscountable' => $this->undiscountable, 'unit' => $this->unit, 'vat-amount' => $this->vatAmount, 'vat-rate' => $this->vatRate ];
		}
	}

	class Partial_Item extends Onslip360Object {
		/**
		 * @param string[][]|null|Nil $descriptionT9N
		 * @param Partial_ItemModifier[]|null|Nil $modifiers
		 * @param string[][]|null|Nil $productNameT9N
		 * @param Partial_Item[]|null|Nil $subItems
		 * @param string[]|null|Nil $tickets
		*/
		function __construct(
			public int|null|Nil $campaign = null,
			public string|null|Nil $comment = null,
			public string|null|Nil $description = null,
			public array|null|Nil $descriptionT9N = null,
			public float|null|Nil $discountRate = null,
			public Partial_Item|null|Nil $lastKitchenTicketItem = null,
			public Partial_Metadata|null|Nil $metadata = null,
			public int|null|Nil $modifier = null,
			public array|null|Nil $modifiers = null,
			public float|null|Nil $price = null,
			public int|null|Nil $product = null,
			public int|null|Nil $productGroup = null,
			public string|null $productName = null,
			public array|null|Nil $productNameT9N = null,
			public float|null|Nil $purchasePrice = null,
			public float|null $quantity = null,
			public int|null|Nil $stockLocation = null,
			public array|null|Nil $subItems = null,
			public array|null|Nil $tickets = null,
			public ProductGroup\Type|null $type = null,
			public bool|null|Nil $undiscountable = null,
			public string|null|Nil $unit = null,
			public float|null|Nil $vatAmount = null,
			public float|null|Nil $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['campaign'] ?? null, $j['comment'] ?? null, $j['description'] ?? null, $j['description-t9n'] ?? null, $j['discount-rate'] ?? null, Partial_Item::o($j['last-kitchen-ticket-item'] ?? null), Partial_Metadata::o($j['metadata'] ?? null), $j['modifier'] ?? null, Partial_ItemModifier::a($j['modifiers'] ?? null), $j['price'] ?? null, $j['product'] ?? null, $j['product-group'] ?? null, $j['product-name'] ?? null, $j['product-name-t9n'] ?? null, $j['purchase-price'] ?? null, $j['quantity'] ?? null, $j['stock-location'] ?? null, Partial_Item::a($j['sub-items'] ?? null), $j['tickets'] ?? null, static::e(ProductGroup\Type::from(...), $j['type'] ?? null), $j['undiscountable'] ?? null, $j['unit'] ?? null, $j['vat-amount'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'campaign' => $this->campaign, 'comment' => $this->comment, 'description' => $this->description, 'description-t9n' => $this->descriptionT9N, 'discount-rate' => $this->discountRate, 'last-kitchen-ticket-item' => $this->lastKitchenTicketItem, 'metadata' => $this->metadata, 'modifier' => $this->modifier, 'modifiers' => $this->modifiers, 'price' => $this->price, 'product' => $this->product, 'product-group' => $this->productGroup, 'product-name' => $this->productName, 'product-name-t9n' => $this->productNameT9N, 'purchase-price' => $this->purchasePrice, 'quantity' => $this->quantity, 'stock-location' => $this->stockLocation, 'sub-items' => $this->subItems, 'tickets' => $this->tickets, 'type' => $this->type, 'undiscountable' => $this->undiscountable, 'unit' => $this->unit, 'vat-amount' => $this->vatAmount, 'vat-rate' => $this->vatRate ];
		}
	}

	class ItemModifier extends Onslip360Object {
		/**
		 * @param string[] $values
		*/
		function __construct(
			public int $modifier,
			public string $name,
			public array $values,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['modifier'], $j['name'], $j['values'] ];
		}

		protected function _toJson(): array {
			return [ 'modifier' => $this->modifier, 'name' => $this->name, 'values' => $this->values ];
		}
	}

	class Partial_ItemModifier extends Onslip360Object {
		/**
		 * @param string[]|null $values
		*/
		function __construct(
			public int|null $modifier = null,
			public string|null $name = null,
			public array|null $values = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['modifier'] ?? null, $j['name'] ?? null, $j['values'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'modifier' => $this->modifier, 'name' => $this->name, 'values' => $this->values ];
		}
	}

	class KeySpecification extends Onslip360Object {
		function __construct(
			public KeySpecification\Algorithm|null $algorithm = null,
			public int|null $bits = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(KeySpecification\Algorithm::from(...), $j['algorithm'] ?? null), $j['bits'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'algorithm' => $this->algorithm, 'bits' => $this->bits ];
		}
	}

	class Partial_KeySpecification extends Onslip360Object {
		function __construct(
			public KeySpecification\Algorithm|null|Nil $algorithm = null,
			public int|null|Nil $bits = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(KeySpecification\Algorithm::from(...), $j['algorithm'] ?? null), $j['bits'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'algorithm' => $this->algorithm, 'bits' => $this->bits ];
		}
	}

	class Label extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public int $labelCategory,
			public string $name,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['label-category'], $j['name'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'label-category' => $this->labelCategory, 'name' => $this->name, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_Label extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public int|null $labelCategory = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['label-category'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'label-category' => $this->labelCategory, 'labels' => $this->labels, 'name' => $this->name, 'tags' => $this->tags ];
		}
	}

	class Stored_Label extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public int $labelCategory,
			public string $name,
			public string $updated,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['label-category'], $j['name'], $j['updated'], $j['deleted'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'label-category' => $this->labelCategory, 'name' => $this->name, 'updated' => $this->updated, 'deleted' => $this->deleted, 'labels' => $this->labels, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class LabelCategory extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $resources
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $name,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $resources = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['resources'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'resources' => $this->resources, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_LabelCategory extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $resources
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public array|null|Nil $resources = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['resources'] ?? null, $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'labels' => $this->labels, 'name' => $this->name, 'resources' => $this->resources, 'tags' => $this->tags ];
		}
	}

	class Stored_LabelCategory extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $resources
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $name,
			public string $updated,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $resources = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['name'], $j['updated'], $j['deleted'] ?? null, $j['labels'] ?? null, $j['resources'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'updated' => $this->updated, 'deleted' => $this->deleted, 'labels' => $this->labels, 'resources' => $this->resources, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Location extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $name,
			public AccountConfig|null $accountConfig = null,
			public string|null $address = null,
			public string|null $companyName = null,
			public LocationConfig|null $config = null,
			public string|null $created = null,
			public File|null $customerScreenLogo = null,
			public string|null $deleted = null,
			public string|null $email = null,
			public int|null $id = null,
			public array|null $labels = null,
			public string|null $phoneNumber = null,
			public string|null $receiptFooter = null,
			public string|null $receiptHeader = null,
			public File|null $receiptLogo = null,
			public string|null $receiptLogoGray = null,
			public string|null $receiptLogoMono = null,
			public array|null $tags = null,
			public TakeOutConfig|null $takeOutConfig = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public string|null $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], AccountConfig::o($j['account-config'] ?? null), $j['address'] ?? null, $j['company-name'] ?? null, LocationConfig::o($j['config'] ?? null), $j['created'] ?? null, File::o($j['customer-screen-logo'] ?? null), $j['deleted'] ?? null, $j['email'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['phone-number'] ?? null, $j['receipt-footer'] ?? null, $j['receipt-header'] ?? null, File::o($j['receipt-logo'] ?? null), $j['receipt-logo-gray'] ?? null, $j['receipt-logo-mono'] ?? null, $j['tags'] ?? null, TakeOutConfig::o($j['take-out-config'] ?? null), $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'account-config' => $this->accountConfig, 'address' => $this->address, 'company-name' => $this->companyName, 'config' => $this->config, 'created' => $this->created, 'customer-screen-logo' => $this->customerScreenLogo, 'deleted' => $this->deleted, 'email' => $this->email, 'id' => $this->id, 'labels' => $this->labels, 'phone-number' => $this->phoneNumber, 'receipt-footer' => $this->receiptFooter, 'receipt-header' => $this->receiptHeader, 'receipt-logo' => $this->receiptLogo, 'receipt-logo-gray' => $this->receiptLogoGray, 'receipt-logo-mono' => $this->receiptLogoMono, 'tags' => $this->tags, 'take-out-config' => $this->takeOutConfig, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'web-address' => $this->webAddress ];
		}
	}

	class Partial_Location extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public Partial_AccountConfig|null|Nil $accountConfig = null,
			public string|null|Nil $address = null,
			public string|null|Nil $companyName = null,
			public Partial_LocationConfig|null|Nil $config = null,
			public Partial_File|null|Nil $customerScreenLogo = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $email = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public string|null|Nil $phoneNumber = null,
			public string|null|Nil $receiptFooter = null,
			public string|null|Nil $receiptHeader = null,
			public Partial_File|null|Nil $receiptLogo = null,
			public string|null|Nil $receiptLogoGray = null,
			public string|null|Nil $receiptLogoMono = null,
			public array|null|Nil $tags = null,
			public Partial_TakeOutConfig|null|Nil $takeOutConfig = null,
			public string|null|Nil $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_AccountConfig::o($j['account-config'] ?? null), $j['address'] ?? null, $j['company-name'] ?? null, Partial_LocationConfig::o($j['config'] ?? null), Partial_File::o($j['customer-screen-logo'] ?? null), $j['deleted'] ?? null, $j['email'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['phone-number'] ?? null, $j['receipt-footer'] ?? null, $j['receipt-header'] ?? null, Partial_File::o($j['receipt-logo'] ?? null), $j['receipt-logo-gray'] ?? null, $j['receipt-logo-mono'] ?? null, $j['tags'] ?? null, Partial_TakeOutConfig::o($j['take-out-config'] ?? null), $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'account-config' => $this->accountConfig, 'address' => $this->address, 'company-name' => $this->companyName, 'config' => $this->config, 'customer-screen-logo' => $this->customerScreenLogo, 'deleted' => $this->deleted, 'email' => $this->email, 'labels' => $this->labels, 'name' => $this->name, 'phone-number' => $this->phoneNumber, 'receipt-footer' => $this->receiptFooter, 'receipt-header' => $this->receiptHeader, 'receipt-logo' => $this->receiptLogo, 'receipt-logo-gray' => $this->receiptLogoGray, 'receipt-logo-mono' => $this->receiptLogoMono, 'tags' => $this->tags, 'take-out-config' => $this->takeOutConfig, 'web-address' => $this->webAddress ];
		}
	}

	class Stored_Location extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $name,
			public string $updated,
			public AccountConfig|null $accountConfig = null,
			public string|null $address = null,
			public string|null $companyName = null,
			public LocationConfig|null $config = null,
			public File|null $customerScreenLogo = null,
			public string|null $deleted = null,
			public string|null $email = null,
			public array|null $labels = null,
			public string|null $phoneNumber = null,
			public string|null $receiptFooter = null,
			public string|null $receiptHeader = null,
			public File|null $receiptLogo = null,
			public string|null $receiptLogoGray = null,
			public string|null $receiptLogoMono = null,
			public array|null $tags = null,
			public TakeOutConfig|null $takeOutConfig = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public string|null $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['name'], $j['updated'], AccountConfig::o($j['account-config'] ?? null), $j['address'] ?? null, $j['company-name'] ?? null, LocationConfig::o($j['config'] ?? null), File::o($j['customer-screen-logo'] ?? null), $j['deleted'] ?? null, $j['email'] ?? null, $j['labels'] ?? null, $j['phone-number'] ?? null, $j['receipt-footer'] ?? null, $j['receipt-header'] ?? null, File::o($j['receipt-logo'] ?? null), $j['receipt-logo-gray'] ?? null, $j['receipt-logo-mono'] ?? null, $j['tags'] ?? null, TakeOutConfig::o($j['take-out-config'] ?? null), $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'updated' => $this->updated, 'account-config' => $this->accountConfig, 'address' => $this->address, 'company-name' => $this->companyName, 'config' => $this->config, 'customer-screen-logo' => $this->customerScreenLogo, 'deleted' => $this->deleted, 'email' => $this->email, 'labels' => $this->labels, 'phone-number' => $this->phoneNumber, 'receipt-footer' => $this->receiptFooter, 'receipt-header' => $this->receiptHeader, 'receipt-logo' => $this->receiptLogo, 'receipt-logo-gray' => $this->receiptLogoGray, 'receipt-logo-mono' => $this->receiptLogoMono, 'tags' => $this->tags, 'take-out-config' => $this->takeOutConfig, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'web-address' => $this->webAddress ];
		}
	}

	class LocationConfig extends Onslip360Object {
		/**
		 * @param string[]|null $autoCloseBatchSchedules
		*/
		function __construct(
			public array|null $autoCloseBatchSchedules = null,
			public int|null $buttonMap = null,
			public bool|null $customerScreenRegistration = null,
			public bool|null $registerCustomer = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['auto-close-batch-schedules'] ?? null, $j['button-map'] ?? null, $j['customer-screen-registration'] ?? null, $j['register-customer'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'auto-close-batch-schedules' => $this->autoCloseBatchSchedules, 'button-map' => $this->buttonMap, 'customer-screen-registration' => $this->customerScreenRegistration, 'register-customer' => $this->registerCustomer ];
		}
	}

	class Partial_LocationConfig extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $autoCloseBatchSchedules
		*/
		function __construct(
			public array|null|Nil $autoCloseBatchSchedules = null,
			public int|null|Nil $buttonMap = null,
			public bool|null|Nil $customerScreenRegistration = null,
			public bool|null|Nil $registerCustomer = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['auto-close-batch-schedules'] ?? null, $j['button-map'] ?? null, $j['customer-screen-registration'] ?? null, $j['register-customer'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'auto-close-batch-schedules' => $this->autoCloseBatchSchedules, 'button-map' => $this->buttonMap, 'customer-screen-registration' => $this->customerScreenRegistration, 'register-customer' => $this->registerCustomer ];
		}
	}

	class MQRecord extends Onslip360Object {
		/**
		 * @param ActiveTrigger[] $activeTriggers
		 * @param string[]|null $activeEventStreams
		*/
		function __construct(
			public array $activeTriggers,
			public int $retryCount,
			public MQRecord\Type $type,
			public int|null $actionTriggerEvent = null,
			public int|null $actionUserId = null,
			public array|null $activeEventStreams = null,
			public string|null $companyAlias = null,
			public DataObjectOperation|null $dataObject = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ ActiveTrigger::a($j['active-triggers']), $j['retry-count'], static::e(MQRecord\Type::from(...), $j['type']), $j['action-trigger-event'] ?? null, $j['action-user-id'] ?? null, $j['active-event-streams'] ?? null, $j['company-alias'] ?? null, DataObjectOperation::o($j['data-object'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'active-triggers' => $this->activeTriggers, 'retry-count' => $this->retryCount, 'type' => $this->type, 'action-trigger-event' => $this->actionTriggerEvent, 'action-user-id' => $this->actionUserId, 'active-event-streams' => $this->activeEventStreams, 'company-alias' => $this->companyAlias, 'data-object' => $this->dataObject ];
		}
	}

	class Partial_MQRecord extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $activeEventStreams
		 * @param Partial_ActiveTrigger[]|null $activeTriggers
		*/
		function __construct(
			public int|null|Nil $actionTriggerEvent = null,
			public int|null|Nil $actionUserId = null,
			public array|null|Nil $activeEventStreams = null,
			public array|null $activeTriggers = null,
			public string|null|Nil $companyAlias = null,
			public Partial_DataObjectOperation|null|Nil $dataObject = null,
			public int|null $retryCount = null,
			public MQRecord\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['action-trigger-event'] ?? null, $j['action-user-id'] ?? null, $j['active-event-streams'] ?? null, Partial_ActiveTrigger::a($j['active-triggers'] ?? null), $j['company-alias'] ?? null, Partial_DataObjectOperation::o($j['data-object'] ?? null), $j['retry-count'] ?? null, static::e(MQRecord\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'action-trigger-event' => $this->actionTriggerEvent, 'action-user-id' => $this->actionUserId, 'active-event-streams' => $this->activeEventStreams, 'active-triggers' => $this->activeTriggers, 'company-alias' => $this->companyAlias, 'data-object' => $this->dataObject, 'retry-count' => $this->retryCount, 'type' => $this->type ];
		}
	}

	class MQRecordSchedule extends Onslip360Object {
		/**
		 * @param string[] $jsonMqRecords
		 * @param string[]|null $tags
		*/
		function __construct(
			public array $jsonMqRecords,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['json-mq-records'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'json-mq-records' => $this->jsonMqRecords, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_MQRecordSchedule extends Onslip360Object {
		/**
		 * @param string[]|null $jsonMqRecords
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public array|null $jsonMqRecords = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['json-mq-records'] ?? null, $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'json-mq-records' => $this->jsonMqRecords, 'tags' => $this->tags ];
		}
	}

	class Stored_MQRecordSchedule extends Onslip360Object {
		/**
		 * @param string[] $jsonMqRecords
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public array $jsonMqRecords,
			public string $updated,
			public string|null $deleted = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['json-mq-records'], $j['updated'], $j['deleted'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'json-mq-records' => $this->jsonMqRecords, 'updated' => $this->updated, 'deleted' => $this->deleted, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class MerchantConfig extends Onslip360Object {
		/**
		 * @param float[] $vatRates
		*/
		function __construct(
			public string $resellerName,
			public string $salesEmail,
			public string $salesPhone,
			public string $supportEmail,
			public string $supportPhone,
			public string $termsAndConditionsUri,
			public array $vatRates,
			public string $web,
			public string|null $generalInfo = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['reseller-name'], $j['sales-email'], $j['sales-phone'], $j['support-email'], $j['support-phone'], $j['terms-and-conditions-uri'], $j['vat-rates'], $j['web'], $j['general-info'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'reseller-name' => $this->resellerName, 'sales-email' => $this->salesEmail, 'sales-phone' => $this->salesPhone, 'support-email' => $this->supportEmail, 'support-phone' => $this->supportPhone, 'terms-and-conditions-uri' => $this->termsAndConditionsUri, 'vat-rates' => $this->vatRates, 'web' => $this->web, 'general-info' => $this->generalInfo ];
		}
	}

	class Partial_MerchantConfig extends Onslip360Object {
		/**
		 * @param float[]|null $vatRates
		*/
		function __construct(
			public string|null|Nil $generalInfo = null,
			public string|null $resellerName = null,
			public string|null $salesEmail = null,
			public string|null $salesPhone = null,
			public string|null $supportEmail = null,
			public string|null $supportPhone = null,
			public string|null $termsAndConditionsUri = null,
			public array|null $vatRates = null,
			public string|null $web = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['general-info'] ?? null, $j['reseller-name'] ?? null, $j['sales-email'] ?? null, $j['sales-phone'] ?? null, $j['support-email'] ?? null, $j['support-phone'] ?? null, $j['terms-and-conditions-uri'] ?? null, $j['vat-rates'] ?? null, $j['web'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'general-info' => $this->generalInfo, 'reseller-name' => $this->resellerName, 'sales-email' => $this->salesEmail, 'sales-phone' => $this->salesPhone, 'support-email' => $this->supportEmail, 'support-phone' => $this->supportPhone, 'terms-and-conditions-uri' => $this->termsAndConditionsUri, 'vat-rates' => $this->vatRates, 'web' => $this->web ];
		}
	}

	class MerchantParams extends Onslip360Object {
		/**
		 * @param CompanyFeature\Flag[] $availableFeatures
		 * @param CompanyFeature\Flag[] $requiredFeatures
		 * @param float[] $vatRates
		*/
		function __construct(
			public array $availableFeatures,
			public array $requiredFeatures,
			public string $resellerName,
			public string $salesEmail,
			public string $salesPhone,
			public string $supportEmail,
			public string $supportPhone,
			public string $termsAndConditionsUri,
			public array $vatRates,
			public string $web,
			public string|null $generalInfo = null,
			public string|null $resellerAlias = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(CompanyFeature\Flag::from(...), $j['available-features']), static::e(CompanyFeature\Flag::from(...), $j['required-features']), $j['reseller-name'], $j['sales-email'], $j['sales-phone'], $j['support-email'], $j['support-phone'], $j['terms-and-conditions-uri'], $j['vat-rates'], $j['web'], $j['general-info'] ?? null, $j['reseller-alias'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'available-features' => $this->availableFeatures, 'required-features' => $this->requiredFeatures, 'reseller-name' => $this->resellerName, 'sales-email' => $this->salesEmail, 'sales-phone' => $this->salesPhone, 'support-email' => $this->supportEmail, 'support-phone' => $this->supportPhone, 'terms-and-conditions-uri' => $this->termsAndConditionsUri, 'vat-rates' => $this->vatRates, 'web' => $this->web, 'general-info' => $this->generalInfo, 'reseller-alias' => $this->resellerAlias ];
		}
	}

	class Partial_MerchantParams extends Onslip360Object {
		/**
		 * @param CompanyFeature\Flag[]|null $availableFeatures
		 * @param CompanyFeature\Flag[]|null $requiredFeatures
		 * @param float[]|null $vatRates
		*/
		function __construct(
			public array|null $availableFeatures = null,
			public string|null|Nil $generalInfo = null,
			public array|null $requiredFeatures = null,
			public string|null|Nil $resellerAlias = null,
			public string|null $resellerName = null,
			public string|null $salesEmail = null,
			public string|null $salesPhone = null,
			public string|null $supportEmail = null,
			public string|null $supportPhone = null,
			public string|null $termsAndConditionsUri = null,
			public array|null $vatRates = null,
			public string|null $web = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(CompanyFeature\Flag::from(...), $j['available-features'] ?? null), $j['general-info'] ?? null, static::e(CompanyFeature\Flag::from(...), $j['required-features'] ?? null), $j['reseller-alias'] ?? null, $j['reseller-name'] ?? null, $j['sales-email'] ?? null, $j['sales-phone'] ?? null, $j['support-email'] ?? null, $j['support-phone'] ?? null, $j['terms-and-conditions-uri'] ?? null, $j['vat-rates'] ?? null, $j['web'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'available-features' => $this->availableFeatures, 'general-info' => $this->generalInfo, 'required-features' => $this->requiredFeatures, 'reseller-alias' => $this->resellerAlias, 'reseller-name' => $this->resellerName, 'sales-email' => $this->salesEmail, 'sales-phone' => $this->salesPhone, 'support-email' => $this->supportEmail, 'support-phone' => $this->supportPhone, 'terms-and-conditions-uri' => $this->termsAndConditionsUri, 'vat-rates' => $this->vatRates, 'web' => $this->web ];
		}
	}

	class Metadata extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		*/
		function __construct(
			public Metadata\Type $type,
			public CardReceiptMetadata|null $cardReceipt = null,
			public CouponVoucherMetadata|null $couponVoucher = null,
			public CurrencyMetadata|null $currency = null,
			public array|null $labels = null,
			public PaymentVoucherMetadata|null $paymentVoucher = null,
			public PrePaidMetadata|null $prePaid = null,
			public SwishTransactionMetadata|null $swishTransaction = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(Metadata\Type::from(...), $j['type']), CardReceiptMetadata::o($j['card-receipt'] ?? null), CouponVoucherMetadata::o($j['coupon-voucher'] ?? null), CurrencyMetadata::o($j['currency'] ?? null), $j['labels'] ?? null, PaymentVoucherMetadata::o($j['payment-voucher'] ?? null), PrePaidMetadata::o($j['pre-paid'] ?? null), SwishTransactionMetadata::o($j['swish-transaction'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type, 'card-receipt' => $this->cardReceipt, 'coupon-voucher' => $this->couponVoucher, 'currency' => $this->currency, 'labels' => $this->labels, 'payment-voucher' => $this->paymentVoucher, 'pre-paid' => $this->prePaid, 'swish-transaction' => $this->swishTransaction ];
		}
	}

	class Partial_Metadata extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		*/
		function __construct(
			public Partial_CardReceiptMetadata|null|Nil $cardReceipt = null,
			public Partial_CouponVoucherMetadata|null|Nil $couponVoucher = null,
			public Partial_CurrencyMetadata|null|Nil $currency = null,
			public array|null|Nil $labels = null,
			public Partial_PaymentVoucherMetadata|null|Nil $paymentVoucher = null,
			public Partial_PrePaidMetadata|null|Nil $prePaid = null,
			public Partial_SwishTransactionMetadata|null|Nil $swishTransaction = null,
			public Metadata\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_CardReceiptMetadata::o($j['card-receipt'] ?? null), Partial_CouponVoucherMetadata::o($j['coupon-voucher'] ?? null), Partial_CurrencyMetadata::o($j['currency'] ?? null), $j['labels'] ?? null, Partial_PaymentVoucherMetadata::o($j['payment-voucher'] ?? null), Partial_PrePaidMetadata::o($j['pre-paid'] ?? null), Partial_SwishTransactionMetadata::o($j['swish-transaction'] ?? null), static::e(Metadata\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'card-receipt' => $this->cardReceipt, 'coupon-voucher' => $this->couponVoucher, 'currency' => $this->currency, 'labels' => $this->labels, 'payment-voucher' => $this->paymentVoucher, 'pre-paid' => $this->prePaid, 'swish-transaction' => $this->swishTransaction, 'type' => $this->type ];
		}
	}

	class NewAccountLoginDetailsParams extends Onslip360Object {
		function __construct(
			public string $password,
			public string $pin,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['password'], $j['pin'] ];
		}

		protected function _toJson(): array {
			return [ 'password' => $this->password, 'pin' => $this->pin ];
		}
	}

	class Partial_NewAccountLoginDetailsParams extends Onslip360Object {
		function __construct(
			public string|null $password = null,
			public string|null $pin = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['password'] ?? null, $j['pin'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'password' => $this->password, 'pin' => $this->pin ];
		}
	}

	class Order extends Onslip360Object {
		/**
		 * @param int[]|null $customers
		 * @param Item[]|null $items
		 * @param int[]|null $labels
		 * @param Payment[]|null $payments
		 * @param int[]|null $resources
		 * @param string[]|null $schedules
		 * @param string[]|null $tags
		 * @param int[]|null $users
		*/
		function __construct(
			public int $location,
			public string $name,
			public Order\State $state,
			public string|null $authCode = null,
			public string|null $clientReference = null,
			public string|null $created = null,
			public array|null $customers = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public string|null $endDate = null,
			public int|null $id = null,
			public array|null $items = null,
			public array|null $labels = null,
			public string|null $orderReference = null,
			public int|null $owner = null,
			public array|null $payments = null,
			public array|null $resources = null,
			public array|null $schedules = null,
			public string|null $startDate = null,
			public array|null $tags = null,
			public Order\Type|null $type = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public array|null $users = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['location'], $j['name'], static::e(Order\State::from(...), $j['state']), $j['auth-code'] ?? null, $j['client-reference'] ?? null, $j['created'] ?? null, $j['customers'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['end-date'] ?? null, $j['id'] ?? null, Item::a($j['items'] ?? null), $j['labels'] ?? null, $j['order-reference'] ?? null, $j['owner'] ?? null, Payment::a($j['payments'] ?? null), $j['resources'] ?? null, $j['schedules'] ?? null, $j['start-date'] ?? null, $j['tags'] ?? null, static::e(Order\Type::from(...), $j['type'] ?? null), $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['users'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'location' => $this->location, 'name' => $this->name, 'state' => $this->state, 'auth-code' => $this->authCode, 'client-reference' => $this->clientReference, 'created' => $this->created, 'customers' => $this->customers, 'deleted' => $this->deleted, 'description' => $this->description, 'end-date' => $this->endDate, 'id' => $this->id, 'items' => $this->items, 'labels' => $this->labels, 'order-reference' => $this->orderReference, 'owner' => $this->owner, 'payments' => $this->payments, 'resources' => $this->resources, 'schedules' => $this->schedules, 'start-date' => $this->startDate, 'tags' => $this->tags, 'type' => $this->type, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'users' => $this->users ];
		}
	}

	class Partial_Order extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $customers
		 * @param Partial_Item[]|null|Nil $items
		 * @param int[]|null|Nil $labels
		 * @param Partial_Payment[]|null|Nil $payments
		 * @param int[]|null|Nil $resources
		 * @param string[]|null|Nil $schedules
		 * @param string[]|null|Nil $tags
		 * @param int[]|null|Nil $users
		*/
		function __construct(
			public string|null|Nil $authCode = null,
			public string|null|Nil $clientReference = null,
			public array|null|Nil $customers = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $description = null,
			public string|null|Nil $endDate = null,
			public array|null|Nil $items = null,
			public array|null|Nil $labels = null,
			public int|null $location = null,
			public string|null $name = null,
			public string|null|Nil $orderReference = null,
			public int|null|Nil $owner = null,
			public array|null|Nil $payments = null,
			public array|null|Nil $resources = null,
			public array|null|Nil $schedules = null,
			public string|null|Nil $startDate = null,
			public Order\State|null $state = null,
			public array|null|Nil $tags = null,
			public Order\Type|null|Nil $type = null,
			public array|null|Nil $users = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['auth-code'] ?? null, $j['client-reference'] ?? null, $j['customers'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['end-date'] ?? null, Partial_Item::a($j['items'] ?? null), $j['labels'] ?? null, $j['location'] ?? null, $j['name'] ?? null, $j['order-reference'] ?? null, $j['owner'] ?? null, Partial_Payment::a($j['payments'] ?? null), $j['resources'] ?? null, $j['schedules'] ?? null, $j['start-date'] ?? null, static::e(Order\State::from(...), $j['state'] ?? null), $j['tags'] ?? null, static::e(Order\Type::from(...), $j['type'] ?? null), $j['users'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'auth-code' => $this->authCode, 'client-reference' => $this->clientReference, 'customers' => $this->customers, 'deleted' => $this->deleted, 'description' => $this->description, 'end-date' => $this->endDate, 'items' => $this->items, 'labels' => $this->labels, 'location' => $this->location, 'name' => $this->name, 'order-reference' => $this->orderReference, 'owner' => $this->owner, 'payments' => $this->payments, 'resources' => $this->resources, 'schedules' => $this->schedules, 'start-date' => $this->startDate, 'state' => $this->state, 'tags' => $this->tags, 'type' => $this->type, 'users' => $this->users ];
		}
	}

	class Stored_Order extends Onslip360Object {
		/**
		 * @param int[]|null $customers
		 * @param Item[]|null $items
		 * @param int[]|null $labels
		 * @param Payment[]|null $payments
		 * @param int[]|null $resources
		 * @param string[]|null $schedules
		 * @param string[]|null $tags
		 * @param int[]|null $users
		*/
		function __construct(
			public string $created,
			public int $id,
			public int $location,
			public string $name,
			public Order\State $state,
			public string $updated,
			public string|null $authCode = null,
			public string|null $clientReference = null,
			public array|null $customers = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public string|null $endDate = null,
			public array|null $items = null,
			public array|null $labels = null,
			public string|null $orderReference = null,
			public int|null $owner = null,
			public array|null $payments = null,
			public array|null $resources = null,
			public array|null $schedules = null,
			public string|null $startDate = null,
			public array|null $tags = null,
			public Order\Type|null $type = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public array|null $users = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['location'], $j['name'], static::e(Order\State::from(...), $j['state']), $j['updated'], $j['auth-code'] ?? null, $j['client-reference'] ?? null, $j['customers'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['end-date'] ?? null, Item::a($j['items'] ?? null), $j['labels'] ?? null, $j['order-reference'] ?? null, $j['owner'] ?? null, Payment::a($j['payments'] ?? null), $j['resources'] ?? null, $j['schedules'] ?? null, $j['start-date'] ?? null, $j['tags'] ?? null, static::e(Order\Type::from(...), $j['type'] ?? null), $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['users'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'location' => $this->location, 'name' => $this->name, 'state' => $this->state, 'updated' => $this->updated, 'auth-code' => $this->authCode, 'client-reference' => $this->clientReference, 'customers' => $this->customers, 'deleted' => $this->deleted, 'description' => $this->description, 'end-date' => $this->endDate, 'items' => $this->items, 'labels' => $this->labels, 'order-reference' => $this->orderReference, 'owner' => $this->owner, 'payments' => $this->payments, 'resources' => $this->resources, 'schedules' => $this->schedules, 'start-date' => $this->startDate, 'tags' => $this->tags, 'type' => $this->type, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'users' => $this->users ];
		}
	}

	class OrderTicket extends Onslip360Object {
		/**
		 * @param Item[] $items
		*/
		function __construct(
			public string $id,
			public array $items,
			public string $name,
			public OrderTicket\Type $type,
			public string|null $deliveryDate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['id'], Item::a($j['items']), $j['name'], static::e(OrderTicket\Type::from(...), $j['type']), $j['delivery-date'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'id' => $this->id, 'items' => $this->items, 'name' => $this->name, 'type' => $this->type, 'delivery-date' => $this->deliveryDate ];
		}
	}

	class Partial_OrderTicket extends Onslip360Object {
		/**
		 * @param Partial_Item[]|null $items
		*/
		function __construct(
			public string|null|Nil $deliveryDate = null,
			public string|null $id = null,
			public array|null $items = null,
			public string|null $name = null,
			public OrderTicket\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['delivery-date'] ?? null, $j['id'] ?? null, Partial_Item::a($j['items'] ?? null), $j['name'] ?? null, static::e(OrderTicket\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'delivery-date' => $this->deliveryDate, 'id' => $this->id, 'items' => $this->items, 'name' => $this->name, 'type' => $this->type ];
		}
	}

	class PKCS12Status extends Onslip360Object {
		function __construct(
			public bool $certExists,
			public string $certExpires,
			public bool $privKeyExists,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['cert-exists'], $j['cert-expires'], $j['priv-key-exists'] ];
		}

		protected function _toJson(): array {
			return [ 'cert-exists' => $this->certExists, 'cert-expires' => $this->certExpires, 'priv-key-exists' => $this->privKeyExists ];
		}
	}

	class Partial_PKCS12Status extends Onslip360Object {
		function __construct(
			public bool|null $certExists = null,
			public string|null $certExpires = null,
			public bool|null $privKeyExists = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['cert-exists'] ?? null, $j['cert-expires'] ?? null, $j['priv-key-exists'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'cert-exists' => $this->certExists, 'cert-expires' => $this->certExpires, 'priv-key-exists' => $this->privKeyExists ];
		}
	}

	class PasswordReset extends Onslip360Object {
		function __construct(
			public int $passwordResetChallenge,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['password-reset-challenge'] ];
		}

		protected function _toJson(): array {
			return [ 'password-reset-challenge' => $this->passwordResetChallenge ];
		}
	}

	class Partial_PasswordReset extends Onslip360Object {
		function __construct(
			public int|null $passwordResetChallenge = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['password-reset-challenge'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'password-reset-challenge' => $this->passwordResetChallenge ];
		}
	}

	class PasswordResetChallenge extends Onslip360Object {
		function __construct(
			public string $challenge,
			public int|null $passwordReset = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['challenge'], $j['password-reset'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'challenge' => $this->challenge, 'password-reset' => $this->passwordReset ];
		}
	}

	class Partial_PasswordResetChallenge extends Onslip360Object {
		function __construct(
			public string|null $challenge = null,
			public int|null|Nil $passwordReset = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['challenge'] ?? null, $j['password-reset'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'challenge' => $this->challenge, 'password-reset' => $this->passwordReset ];
		}
	}

	class PasswordResetChallengeParams extends Onslip360Object {
		function __construct(
			public string $challengeUrl,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['challenge-url'] ];
		}

		protected function _toJson(): array {
			return [ 'challenge-url' => $this->challengeUrl ];
		}
	}

	class Partial_PasswordResetChallengeParams extends Onslip360Object {
		function __construct(
			public string|null $challengeUrl = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['challenge-url'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'challenge-url' => $this->challengeUrl ];
		}
	}

	class PasswordResetChallengeRequest extends Onslip360Object {
		function __construct(
			public string $company,
			public string $user,
			public string|null $locale = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['company'], $j['user'], $j['locale'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'company' => $this->company, 'user' => $this->user, 'locale' => $this->locale ];
		}
	}

	class Partial_PasswordResetChallengeRequest extends Onslip360Object {
		function __construct(
			public string|null $company = null,
			public string|null|Nil $locale = null,
			public string|null $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['company'] ?? null, $j['locale'] ?? null, $j['user'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'company' => $this->company, 'locale' => $this->locale, 'user' => $this->user ];
		}
	}

	class Payment extends Onslip360Object {
		function __construct(
			public float $amount,
			public PaymentMethod\Type $method,
			public float|null $foreignAmount = null,
			public float|null $gratuity = null,
			public Metadata|null $metadata = null,
			public string|null $name = null,
			public int|null $paymentMethod = null,
			public float|null $vatAmount = null,
			public float|null $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'], static::e(PaymentMethod\Type::from(...), $j['method']), $j['foreign-amount'] ?? null, $j['gratuity'] ?? null, Metadata::o($j['metadata'] ?? null), $j['name'] ?? null, $j['payment-method'] ?? null, $j['vat-amount'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'method' => $this->method, 'foreign-amount' => $this->foreignAmount, 'gratuity' => $this->gratuity, 'metadata' => $this->metadata, 'name' => $this->name, 'payment-method' => $this->paymentMethod, 'vat-amount' => $this->vatAmount, 'vat-rate' => $this->vatRate ];
		}
	}

	class Partial_Payment extends Onslip360Object {
		function __construct(
			public float|null $amount = null,
			public float|null|Nil $foreignAmount = null,
			public float|null|Nil $gratuity = null,
			public Partial_Metadata|null|Nil $metadata = null,
			public PaymentMethod\Type|null $method = null,
			public string|null|Nil $name = null,
			public int|null|Nil $paymentMethod = null,
			public float|null|Nil $vatAmount = null,
			public float|null|Nil $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['foreign-amount'] ?? null, $j['gratuity'] ?? null, Partial_Metadata::o($j['metadata'] ?? null), static::e(PaymentMethod\Type::from(...), $j['method'] ?? null), $j['name'] ?? null, $j['payment-method'] ?? null, $j['vat-amount'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'foreign-amount' => $this->foreignAmount, 'gratuity' => $this->gratuity, 'metadata' => $this->metadata, 'method' => $this->method, 'name' => $this->name, 'payment-method' => $this->paymentMethod, 'vat-amount' => $this->vatAmount, 'vat-rate' => $this->vatRate ];
		}
	}

	class PaymentBatchSummary extends Onslip360Object {
		function __construct(
			public string $name,
			public TransactionSummary $transactionSummary,
			public TransactionSummary|null $acquirersTransactionSummary = null,
			public CardMetadata\Status|null $status = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], TransactionSummary::o($j['transaction-summary']), TransactionSummary::o($j['acquirers-transaction-summary'] ?? null), static::e(CardMetadata\Status::from(...), $j['status'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'transaction-summary' => $this->transactionSummary, 'acquirers-transaction-summary' => $this->acquirersTransactionSummary, 'status' => $this->status ];
		}
	}

	class Partial_PaymentBatchSummary extends Onslip360Object {
		function __construct(
			public Partial_TransactionSummary|null|Nil $acquirersTransactionSummary = null,
			public string|null $name = null,
			public CardMetadata\Status|null|Nil $status = null,
			public Partial_TransactionSummary|null $transactionSummary = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_TransactionSummary::o($j['acquirers-transaction-summary'] ?? null), $j['name'] ?? null, static::e(CardMetadata\Status::from(...), $j['status'] ?? null), Partial_TransactionSummary::o($j['transaction-summary'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'acquirers-transaction-summary' => $this->acquirersTransactionSummary, 'name' => $this->name, 'status' => $this->status, 'transaction-summary' => $this->transactionSummary ];
		}
	}

	class PaymentMethod extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $name,
			public PaymentMethod\Type $type,
			public bool $virtual,
			public int|null $accessToken = null,
			public int|null $accessTokenUser = null,
			public int|null $account = null,
			public int|null $clearingAccount = null,
			public string|null $created = null,
			public string|null $currencyCode = null,
			public string|null $currencySymbol = null,
			public string|null $deleted = null,
			public float|null $exchangeRate = null,
			public int|null $id = null,
			public array|null $labels = null,
			public bool|null $registerCustomer = null,
			public float|null $roundingMultiple = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $vatAccount = null,
			public float|null $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], static::e(PaymentMethod\Type::from(...), $j['type']), $j['virtual'], $j['access-token'] ?? null, $j['access-token-user'] ?? null, $j['account'] ?? null, $j['clearing-account'] ?? null, $j['created'] ?? null, $j['currency-code'] ?? null, $j['currency-symbol'] ?? null, $j['deleted'] ?? null, $j['exchange-rate'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['register-customer'] ?? null, $j['rounding-multiple'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['vat-account'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'type' => $this->type, 'virtual' => $this->virtual, 'access-token' => $this->accessToken, 'access-token-user' => $this->accessTokenUser, 'account' => $this->account, 'clearing-account' => $this->clearingAccount, 'created' => $this->created, 'currency-code' => $this->currencyCode, 'currency-symbol' => $this->currencySymbol, 'deleted' => $this->deleted, 'exchange-rate' => $this->exchangeRate, 'id' => $this->id, 'labels' => $this->labels, 'register-customer' => $this->registerCustomer, 'rounding-multiple' => $this->roundingMultiple, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'vat-account' => $this->vatAccount, 'vat-rate' => $this->vatRate ];
		}
	}

	class Partial_PaymentMethod extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public int|null|Nil $accessToken = null,
			public int|null|Nil $accessTokenUser = null,
			public int|null|Nil $account = null,
			public int|null|Nil $clearingAccount = null,
			public string|null|Nil $currencyCode = null,
			public string|null|Nil $currencySymbol = null,
			public string|null|Nil $deleted = null,
			public float|null|Nil $exchangeRate = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public bool|null|Nil $registerCustomer = null,
			public float|null|Nil $roundingMultiple = null,
			public array|null|Nil $tags = null,
			public PaymentMethod\Type|null $type = null,
			public int|null|Nil $vatAccount = null,
			public float|null|Nil $vatRate = null,
			public bool|null $virtual = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['access-token'] ?? null, $j['access-token-user'] ?? null, $j['account'] ?? null, $j['clearing-account'] ?? null, $j['currency-code'] ?? null, $j['currency-symbol'] ?? null, $j['deleted'] ?? null, $j['exchange-rate'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['register-customer'] ?? null, $j['rounding-multiple'] ?? null, $j['tags'] ?? null, static::e(PaymentMethod\Type::from(...), $j['type'] ?? null), $j['vat-account'] ?? null, $j['vat-rate'] ?? null, $j['virtual'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'access-token' => $this->accessToken, 'access-token-user' => $this->accessTokenUser, 'account' => $this->account, 'clearing-account' => $this->clearingAccount, 'currency-code' => $this->currencyCode, 'currency-symbol' => $this->currencySymbol, 'deleted' => $this->deleted, 'exchange-rate' => $this->exchangeRate, 'labels' => $this->labels, 'name' => $this->name, 'register-customer' => $this->registerCustomer, 'rounding-multiple' => $this->roundingMultiple, 'tags' => $this->tags, 'type' => $this->type, 'vat-account' => $this->vatAccount, 'vat-rate' => $this->vatRate, 'virtual' => $this->virtual ];
		}
	}

	class Stored_PaymentMethod extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $name,
			public PaymentMethod\Type $type,
			public string $updated,
			public bool $virtual,
			public int|null $accessToken = null,
			public int|null $accessTokenUser = null,
			public int|null $account = null,
			public int|null $clearingAccount = null,
			public string|null $currencyCode = null,
			public string|null $currencySymbol = null,
			public string|null $deleted = null,
			public float|null $exchangeRate = null,
			public array|null $labels = null,
			public bool|null $registerCustomer = null,
			public float|null $roundingMultiple = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $vatAccount = null,
			public float|null $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['name'], static::e(PaymentMethod\Type::from(...), $j['type']), $j['updated'], $j['virtual'], $j['access-token'] ?? null, $j['access-token-user'] ?? null, $j['account'] ?? null, $j['clearing-account'] ?? null, $j['currency-code'] ?? null, $j['currency-symbol'] ?? null, $j['deleted'] ?? null, $j['exchange-rate'] ?? null, $j['labels'] ?? null, $j['register-customer'] ?? null, $j['rounding-multiple'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['vat-account'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'type' => $this->type, 'updated' => $this->updated, 'virtual' => $this->virtual, 'access-token' => $this->accessToken, 'access-token-user' => $this->accessTokenUser, 'account' => $this->account, 'clearing-account' => $this->clearingAccount, 'currency-code' => $this->currencyCode, 'currency-symbol' => $this->currencySymbol, 'deleted' => $this->deleted, 'exchange-rate' => $this->exchangeRate, 'labels' => $this->labels, 'register-customer' => $this->registerCustomer, 'rounding-multiple' => $this->roundingMultiple, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'vat-account' => $this->vatAccount, 'vat-rate' => $this->vatRate ];
		}
	}

	class PaymentMethodAccount extends Onslip360Object {
		function __construct(
			public PaymentMethod\Type $method,
			public int|null $account = null,
			public int|null $clearingAccount = null,
			public int|null $paymentMethod = null,
			public int|null $vatAccount = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(PaymentMethod\Type::from(...), $j['method']), $j['account'] ?? null, $j['clearing-account'] ?? null, $j['payment-method'] ?? null, $j['vat-account'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'method' => $this->method, 'account' => $this->account, 'clearing-account' => $this->clearingAccount, 'payment-method' => $this->paymentMethod, 'vat-account' => $this->vatAccount ];
		}
	}

	class Partial_PaymentMethodAccount extends Onslip360Object {
		function __construct(
			public int|null|Nil $account = null,
			public int|null|Nil $clearingAccount = null,
			public PaymentMethod\Type|null $method = null,
			public int|null|Nil $paymentMethod = null,
			public int|null|Nil $vatAccount = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['account'] ?? null, $j['clearing-account'] ?? null, static::e(PaymentMethod\Type::from(...), $j['method'] ?? null), $j['payment-method'] ?? null, $j['vat-account'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'account' => $this->account, 'clearing-account' => $this->clearingAccount, 'method' => $this->method, 'payment-method' => $this->paymentMethod, 'vat-account' => $this->vatAccount ];
		}
	}

	class PaymentSaleSummary extends Onslip360Object {
		function __construct(
			public float $amount,
			public int $count,
			public PaymentMethod\Type $method,
			public float|null $foreignAmount = null,
			public int|null $paymentMethod = null,
			public float|null $vatAmount = null,
			public float|null $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'], $j['count'], static::e(PaymentMethod\Type::from(...), $j['method']), $j['foreign-amount'] ?? null, $j['payment-method'] ?? null, $j['vat-amount'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'count' => $this->count, 'method' => $this->method, 'foreign-amount' => $this->foreignAmount, 'payment-method' => $this->paymentMethod, 'vat-amount' => $this->vatAmount, 'vat-rate' => $this->vatRate ];
		}
	}

	class Partial_PaymentSaleSummary extends Onslip360Object {
		function __construct(
			public float|null $amount = null,
			public int|null $count = null,
			public float|null|Nil $foreignAmount = null,
			public PaymentMethod\Type|null $method = null,
			public int|null|Nil $paymentMethod = null,
			public float|null|Nil $vatAmount = null,
			public float|null|Nil $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['count'] ?? null, $j['foreign-amount'] ?? null, static::e(PaymentMethod\Type::from(...), $j['method'] ?? null), $j['payment-method'] ?? null, $j['vat-amount'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'count' => $this->count, 'foreign-amount' => $this->foreignAmount, 'method' => $this->method, 'payment-method' => $this->paymentMethod, 'vat-amount' => $this->vatAmount, 'vat-rate' => $this->vatRate ];
		}
	}

	class PaymentSummary extends Onslip360Object {
		function __construct(
			public float $amount,
			public int $count,
			public PaymentMethod\Type $method,
			public float|null $foreignAmount = null,
			public int|null $paymentMethod = null,
			public float|null $vatAmount = null,
			public float|null $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'], $j['count'], static::e(PaymentMethod\Type::from(...), $j['method']), $j['foreign-amount'] ?? null, $j['payment-method'] ?? null, $j['vat-amount'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'count' => $this->count, 'method' => $this->method, 'foreign-amount' => $this->foreignAmount, 'payment-method' => $this->paymentMethod, 'vat-amount' => $this->vatAmount, 'vat-rate' => $this->vatRate ];
		}
	}

	class Partial_PaymentSummary extends Onslip360Object {
		function __construct(
			public float|null $amount = null,
			public int|null $count = null,
			public float|null|Nil $foreignAmount = null,
			public PaymentMethod\Type|null $method = null,
			public int|null|Nil $paymentMethod = null,
			public float|null|Nil $vatAmount = null,
			public float|null|Nil $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['count'] ?? null, $j['foreign-amount'] ?? null, static::e(PaymentMethod\Type::from(...), $j['method'] ?? null), $j['payment-method'] ?? null, $j['vat-amount'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'count' => $this->count, 'foreign-amount' => $this->foreignAmount, 'method' => $this->method, 'payment-method' => $this->paymentMethod, 'vat-amount' => $this->vatAmount, 'vat-rate' => $this->vatRate ];
		}
	}

	class PaymentVoucher extends Onslip360Object {
		function __construct(
			public float $balance,
			public float $creditLimit,
			public int $paymentMethod,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['balance'], $j['credit-limit'], $j['payment-method'] ];
		}

		protected function _toJson(): array {
			return [ 'balance' => $this->balance, 'credit-limit' => $this->creditLimit, 'payment-method' => $this->paymentMethod ];
		}
	}

	class Partial_PaymentVoucher extends Onslip360Object {
		function __construct(
			public float|null $balance = null,
			public float|null $creditLimit = null,
			public int|null $paymentMethod = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['balance'] ?? null, $j['credit-limit'] ?? null, $j['payment-method'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'balance' => $this->balance, 'credit-limit' => $this->creditLimit, 'payment-method' => $this->paymentMethod ];
		}
	}

	class PaymentVoucherMetadata extends Onslip360Object {
		/**
		 * @param string[]|null $identifiers
		*/
		function __construct(
			public string $transactionDate,
			public string $transactionId,
			public int $voucher,
			public float|null $balance = null,
			public string|null $expires = null,
			public array|null $identifiers = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['transaction-date'], $j['transaction-id'], $j['voucher'], $j['balance'] ?? null, $j['expires'] ?? null, $j['identifiers'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'transaction-date' => $this->transactionDate, 'transaction-id' => $this->transactionId, 'voucher' => $this->voucher, 'balance' => $this->balance, 'expires' => $this->expires, 'identifiers' => $this->identifiers ];
		}
	}

	class Partial_PaymentVoucherMetadata extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $identifiers
		*/
		function __construct(
			public float|null|Nil $balance = null,
			public string|null|Nil $expires = null,
			public array|null|Nil $identifiers = null,
			public string|null $transactionDate = null,
			public string|null $transactionId = null,
			public int|null $voucher = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['balance'] ?? null, $j['expires'] ?? null, $j['identifiers'] ?? null, $j['transaction-date'] ?? null, $j['transaction-id'] ?? null, $j['voucher'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'balance' => $this->balance, 'expires' => $this->expires, 'identifiers' => $this->identifiers, 'transaction-date' => $this->transactionDate, 'transaction-id' => $this->transactionId, 'voucher' => $this->voucher ];
		}
	}

	class Peripheral extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string|null $created = null,
			public string|null $deleted = null,
			public string|null $deviceId = null,
			public Peripheral\PeripheralFunction|null $function = null,
			public int|null $id = null,
			public array|null $labels = null,
			public int|null $location = null,
			public string|null $name = null,
			public string|null $serviceId = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public VirtualDevice|null $virtualDevice = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'] ?? null, $j['deleted'] ?? null, $j['device-id'] ?? null, static::e(Peripheral\PeripheralFunction::from(...), $j['function'] ?? null), $j['id'] ?? null, $j['labels'] ?? null, $j['location'] ?? null, $j['name'] ?? null, $j['service-id'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, VirtualDevice::o($j['virtual-device'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'deleted' => $this->deleted, 'device-id' => $this->deviceId, 'function' => $this->function, 'id' => $this->id, 'labels' => $this->labels, 'location' => $this->location, 'name' => $this->name, 'service-id' => $this->serviceId, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'virtual-device' => $this->virtualDevice ];
		}
	}

	class Partial_Peripheral extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public string|null|Nil $deviceId = null,
			public Peripheral\PeripheralFunction|null|Nil $function = null,
			public array|null|Nil $labels = null,
			public int|null|Nil $location = null,
			public string|null|Nil $name = null,
			public string|null|Nil $serviceId = null,
			public array|null|Nil $tags = null,
			public Partial_VirtualDevice|null|Nil $virtualDevice = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['device-id'] ?? null, static::e(Peripheral\PeripheralFunction::from(...), $j['function'] ?? null), $j['labels'] ?? null, $j['location'] ?? null, $j['name'] ?? null, $j['service-id'] ?? null, $j['tags'] ?? null, Partial_VirtualDevice::o($j['virtual-device'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'device-id' => $this->deviceId, 'function' => $this->function, 'labels' => $this->labels, 'location' => $this->location, 'name' => $this->name, 'service-id' => $this->serviceId, 'tags' => $this->tags, 'virtual-device' => $this->virtualDevice ];
		}
	}

	class Stored_Peripheral extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $updated,
			public string|null $deleted = null,
			public string|null $deviceId = null,
			public Peripheral\PeripheralFunction|null $function = null,
			public array|null $labels = null,
			public int|null $location = null,
			public string|null $name = null,
			public string|null $serviceId = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public VirtualDevice|null $virtualDevice = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['updated'], $j['deleted'] ?? null, $j['device-id'] ?? null, static::e(Peripheral\PeripheralFunction::from(...), $j['function'] ?? null), $j['labels'] ?? null, $j['location'] ?? null, $j['name'] ?? null, $j['service-id'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, VirtualDevice::o($j['virtual-device'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'updated' => $this->updated, 'deleted' => $this->deleted, 'device-id' => $this->deviceId, 'function' => $this->function, 'labels' => $this->labels, 'location' => $this->location, 'name' => $this->name, 'service-id' => $this->serviceId, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'virtual-device' => $this->virtualDevice ];
		}
	}

	class PeripheralBinding extends Onslip360Object {
		/**
		 * @param PeripheralServiceBinding[] $serviceBindings
		*/
		function __construct(
			public string $deviceId,
			public string $deviceModel,
			public string $deviceName,
			public string $deviceType,
			public string $deviceVersion,
			public bool $exclusive,
			public string $name,
			public array $serviceBindings,
			public string|null $address = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['device-id'], $j['device-model'], $j['device-name'], $j['device-type'], $j['device-version'], $j['exclusive'], $j['name'], PeripheralServiceBinding::a($j['service-bindings']), $j['address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'device-id' => $this->deviceId, 'device-model' => $this->deviceModel, 'device-name' => $this->deviceName, 'device-type' => $this->deviceType, 'device-version' => $this->deviceVersion, 'exclusive' => $this->exclusive, 'name' => $this->name, 'service-bindings' => $this->serviceBindings, 'address' => $this->address ];
		}
	}

	class Partial_PeripheralBinding extends Onslip360Object {
		/**
		 * @param Partial_PeripheralServiceBinding[]|null $serviceBindings
		*/
		function __construct(
			public string|null|Nil $address = null,
			public string|null $deviceId = null,
			public string|null $deviceModel = null,
			public string|null $deviceName = null,
			public string|null $deviceType = null,
			public string|null $deviceVersion = null,
			public bool|null $exclusive = null,
			public string|null $name = null,
			public array|null $serviceBindings = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['address'] ?? null, $j['device-id'] ?? null, $j['device-model'] ?? null, $j['device-name'] ?? null, $j['device-type'] ?? null, $j['device-version'] ?? null, $j['exclusive'] ?? null, $j['name'] ?? null, Partial_PeripheralServiceBinding::a($j['service-bindings'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'address' => $this->address, 'device-id' => $this->deviceId, 'device-model' => $this->deviceModel, 'device-name' => $this->deviceName, 'device-type' => $this->deviceType, 'device-version' => $this->deviceVersion, 'exclusive' => $this->exclusive, 'name' => $this->name, 'service-bindings' => $this->serviceBindings ];
		}
	}

	class PeripheralServiceBinding extends Onslip360Object {
		/**
		 * @param Peripheral\PeripheralFunction[] $functions
		*/
		function __construct(
			public array $functions,
			public string $name,
			public string $serviceId,
			public string $serviceName,
			public string $serviceType,
			public string|null $serviceHint = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(Peripheral\PeripheralFunction::from(...), $j['functions']), $j['name'], $j['service-id'], $j['service-name'], $j['service-type'], $j['service-hint'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'functions' => $this->functions, 'name' => $this->name, 'service-id' => $this->serviceId, 'service-name' => $this->serviceName, 'service-type' => $this->serviceType, 'service-hint' => $this->serviceHint ];
		}
	}

	class Partial_PeripheralServiceBinding extends Onslip360Object {
		/**
		 * @param Peripheral\PeripheralFunction[]|null $functions
		*/
		function __construct(
			public array|null $functions = null,
			public string|null $name = null,
			public string|null|Nil $serviceHint = null,
			public string|null $serviceId = null,
			public string|null $serviceName = null,
			public string|null $serviceType = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(Peripheral\PeripheralFunction::from(...), $j['functions'] ?? null), $j['name'] ?? null, $j['service-hint'] ?? null, $j['service-id'] ?? null, $j['service-name'] ?? null, $j['service-type'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'functions' => $this->functions, 'name' => $this->name, 'service-hint' => $this->serviceHint, 'service-id' => $this->serviceId, 'service-name' => $this->serviceName, 'service-type' => $this->serviceType ];
		}
	}

	class PersonalkollenActivation extends Onslip360Object {
		function __construct(
			public string $exportSalesSecret,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['export-sales-secret'] ];
		}

		protected function _toJson(): array {
			return [ 'export-sales-secret' => $this->exportSalesSecret ];
		}
	}

	class Partial_PersonalkollenActivation extends Onslip360Object {
		function __construct(
			public string|null $exportSalesSecret = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['export-sales-secret'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'export-sales-secret' => $this->exportSalesSecret ];
		}
	}

	class PinResetRequest extends Onslip360Object {
		function __construct(
			public string $pin,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['pin'] ];
		}

		protected function _toJson(): array {
			return [ 'pin' => $this->pin ];
		}
	}

	class Partial_PinResetRequest extends Onslip360Object {
		function __construct(
			public string|null $pin = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['pin'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'pin' => $this->pin ];
		}
	}

	class PlandayActivation extends Onslip360Object {
		function __construct(
			public string $authorizationCode,
			public string $redirectUri,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['authorization-code'], $j['redirect-uri'] ];
		}

		protected function _toJson(): array {
			return [ 'authorization-code' => $this->authorizationCode, 'redirect-uri' => $this->redirectUri ];
		}
	}

	class Partial_PlandayActivation extends Onslip360Object {
		function __construct(
			public string|null $authorizationCode = null,
			public string|null $redirectUri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['authorization-code'] ?? null, $j['redirect-uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'authorization-code' => $this->authorizationCode, 'redirect-uri' => $this->redirectUri ];
		}
	}

	class PrePaidMetadata extends Onslip360Object {
		function __construct(
			public string $paymentReference,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['payment-reference'] ];
		}

		protected function _toJson(): array {
			return [ 'payment-reference' => $this->paymentReference ];
		}
	}

	class Partial_PrePaidMetadata extends Onslip360Object {
		function __construct(
			public string|null $paymentReference = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['payment-reference'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'payment-reference' => $this->paymentReference ];
		}
	}

	class PrivPortToken extends Onslip360Object {
		/**
		 * @param Permission[]|null $permissions
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $alias,
			public string $key,
			public string $name,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $permissions = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'], $j['key'], $j['name'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, static::e(Permission::from(...), $j['permissions'] ?? null), $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'key' => $this->key, 'name' => $this->name, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'permissions' => $this->permissions, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_PrivPortToken extends Onslip360Object {
		/**
		 * @param Permission[]|null|Nil $permissions
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null $alias = null,
			public string|null|Nil $deleted = null,
			public string|null $key = null,
			public string|null $name = null,
			public array|null|Nil $permissions = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'] ?? null, $j['deleted'] ?? null, $j['key'] ?? null, $j['name'] ?? null, static::e(Permission::from(...), $j['permissions'] ?? null), $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'deleted' => $this->deleted, 'key' => $this->key, 'name' => $this->name, 'permissions' => $this->permissions, 'tags' => $this->tags ];
		}
	}

	class Stored_PrivPortToken extends Onslip360Object {
		/**
		 * @param Permission[]|null $permissions
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $alias,
			public string $created,
			public int $id,
			public string $name,
			public string $updated,
			public string|null $deleted = null,
			public string|null $key = null,
			public array|null $permissions = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'], $j['created'], $j['id'], $j['name'], $j['updated'], $j['deleted'] ?? null, $j['key'] ?? null, static::e(Permission::from(...), $j['permissions'] ?? null), $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'updated' => $this->updated, 'deleted' => $this->deleted, 'key' => $this->key, 'permissions' => $this->permissions, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Product extends Onslip360Object {
		/**
		 * @param string[][]|null $descriptionT9N
		 * @param string[][]|null $htmlDescriptionT9N
		 * @param int[]|null $labels
		 * @param int[]|null $modifiers
		 * @param string[][]|null $nameT9N
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $name,
			public int $productGroup,
			public string|null $alert = null,
			public string|null $brand = null,
			public string|null $created = null,
			public float|null $defaultQuantity = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public array|null $descriptionT9N = null,
			public string|null $ean = null,
			public string|null $expiration = null,
			public string|null $htmlDescription = null,
			public array|null $htmlDescriptionT9N = null,
			public int|null $id = null,
			public array|null $labels = null,
			public string|null $modelNumber = null,
			public array|null $modifiers = null,
			public array|null $nameT9N = null,
			public int|null $plu = null,
			public float|null $price = null,
			public float|null $purchasePrice = null,
			public string|null $sku = null,
			public array|null $tags = null,
			public Product\Type|null $type = null,
			public string|null $unit = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $voucherCouponProduct = null,
			public float|null $voucherCouponQuantity = null,
			public int|null $voucherPaymentMethod = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], $j['product-group'], $j['alert'] ?? null, $j['brand'] ?? null, $j['created'] ?? null, $j['default-quantity'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['description-t9n'] ?? null, $j['ean'] ?? null, $j['expiration'] ?? null, $j['html-description'] ?? null, $j['html-description-t9n'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['model-number'] ?? null, $j['modifiers'] ?? null, $j['name-t9n'] ?? null, $j['plu'] ?? null, $j['price'] ?? null, $j['purchase-price'] ?? null, $j['sku'] ?? null, $j['tags'] ?? null, static::e(Product\Type::from(...), $j['type'] ?? null), $j['unit'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['voucher-coupon-product'] ?? null, $j['voucher-coupon-quantity'] ?? null, $j['voucher-payment-method'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'product-group' => $this->productGroup, 'alert' => $this->alert, 'brand' => $this->brand, 'created' => $this->created, 'default-quantity' => $this->defaultQuantity, 'deleted' => $this->deleted, 'description' => $this->description, 'description-t9n' => $this->descriptionT9N, 'ean' => $this->ean, 'expiration' => $this->expiration, 'html-description' => $this->htmlDescription, 'html-description-t9n' => $this->htmlDescriptionT9N, 'id' => $this->id, 'labels' => $this->labels, 'model-number' => $this->modelNumber, 'modifiers' => $this->modifiers, 'name-t9n' => $this->nameT9N, 'plu' => $this->plu, 'price' => $this->price, 'purchase-price' => $this->purchasePrice, 'sku' => $this->sku, 'tags' => $this->tags, 'type' => $this->type, 'unit' => $this->unit, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'voucher-coupon-product' => $this->voucherCouponProduct, 'voucher-coupon-quantity' => $this->voucherCouponQuantity, 'voucher-payment-method' => $this->voucherPaymentMethod ];
		}
	}

	class Partial_Product extends Onslip360Object {
		/**
		 * @param string[][]|null|Nil $descriptionT9N
		 * @param string[][]|null|Nil $htmlDescriptionT9N
		 * @param int[]|null|Nil $labels
		 * @param int[]|null|Nil $modifiers
		 * @param string[][]|null|Nil $nameT9N
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $alert = null,
			public string|null|Nil $brand = null,
			public float|null|Nil $defaultQuantity = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $description = null,
			public array|null|Nil $descriptionT9N = null,
			public string|null|Nil $ean = null,
			public string|null|Nil $expiration = null,
			public string|null|Nil $htmlDescription = null,
			public array|null|Nil $htmlDescriptionT9N = null,
			public array|null|Nil $labels = null,
			public string|null|Nil $modelNumber = null,
			public array|null|Nil $modifiers = null,
			public string|null $name = null,
			public array|null|Nil $nameT9N = null,
			public int|null|Nil $plu = null,
			public float|null|Nil $price = null,
			public int|null $productGroup = null,
			public float|null|Nil $purchasePrice = null,
			public string|null|Nil $sku = null,
			public array|null|Nil $tags = null,
			public Product\Type|null|Nil $type = null,
			public string|null|Nil $unit = null,
			public int|null|Nil $voucherCouponProduct = null,
			public float|null|Nil $voucherCouponQuantity = null,
			public int|null|Nil $voucherPaymentMethod = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alert'] ?? null, $j['brand'] ?? null, $j['default-quantity'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['description-t9n'] ?? null, $j['ean'] ?? null, $j['expiration'] ?? null, $j['html-description'] ?? null, $j['html-description-t9n'] ?? null, $j['labels'] ?? null, $j['model-number'] ?? null, $j['modifiers'] ?? null, $j['name'] ?? null, $j['name-t9n'] ?? null, $j['plu'] ?? null, $j['price'] ?? null, $j['product-group'] ?? null, $j['purchase-price'] ?? null, $j['sku'] ?? null, $j['tags'] ?? null, static::e(Product\Type::from(...), $j['type'] ?? null), $j['unit'] ?? null, $j['voucher-coupon-product'] ?? null, $j['voucher-coupon-quantity'] ?? null, $j['voucher-payment-method'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alert' => $this->alert, 'brand' => $this->brand, 'default-quantity' => $this->defaultQuantity, 'deleted' => $this->deleted, 'description' => $this->description, 'description-t9n' => $this->descriptionT9N, 'ean' => $this->ean, 'expiration' => $this->expiration, 'html-description' => $this->htmlDescription, 'html-description-t9n' => $this->htmlDescriptionT9N, 'labels' => $this->labels, 'model-number' => $this->modelNumber, 'modifiers' => $this->modifiers, 'name' => $this->name, 'name-t9n' => $this->nameT9N, 'plu' => $this->plu, 'price' => $this->price, 'product-group' => $this->productGroup, 'purchase-price' => $this->purchasePrice, 'sku' => $this->sku, 'tags' => $this->tags, 'type' => $this->type, 'unit' => $this->unit, 'voucher-coupon-product' => $this->voucherCouponProduct, 'voucher-coupon-quantity' => $this->voucherCouponQuantity, 'voucher-payment-method' => $this->voucherPaymentMethod ];
		}
	}

	class Stored_Product extends Onslip360Object {
		/**
		 * @param string[][]|null $descriptionT9N
		 * @param string[][]|null $htmlDescriptionT9N
		 * @param int[]|null $labels
		 * @param int[]|null $modifiers
		 * @param string[][]|null $nameT9N
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $name,
			public int $productGroup,
			public string $updated,
			public string|null $alert = null,
			public string|null $brand = null,
			public float|null $defaultQuantity = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public array|null $descriptionT9N = null,
			public string|null $ean = null,
			public string|null $expiration = null,
			public string|null $htmlDescription = null,
			public array|null $htmlDescriptionT9N = null,
			public array|null $labels = null,
			public string|null $modelNumber = null,
			public array|null $modifiers = null,
			public array|null $nameT9N = null,
			public int|null $plu = null,
			public float|null $price = null,
			public float|null $purchasePrice = null,
			public string|null $sku = null,
			public array|null $tags = null,
			public Product\Type|null $type = null,
			public string|null $unit = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $voucherCouponProduct = null,
			public float|null $voucherCouponQuantity = null,
			public int|null $voucherPaymentMethod = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['name'], $j['product-group'], $j['updated'], $j['alert'] ?? null, $j['brand'] ?? null, $j['default-quantity'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['description-t9n'] ?? null, $j['ean'] ?? null, $j['expiration'] ?? null, $j['html-description'] ?? null, $j['html-description-t9n'] ?? null, $j['labels'] ?? null, $j['model-number'] ?? null, $j['modifiers'] ?? null, $j['name-t9n'] ?? null, $j['plu'] ?? null, $j['price'] ?? null, $j['purchase-price'] ?? null, $j['sku'] ?? null, $j['tags'] ?? null, static::e(Product\Type::from(...), $j['type'] ?? null), $j['unit'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['voucher-coupon-product'] ?? null, $j['voucher-coupon-quantity'] ?? null, $j['voucher-payment-method'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'product-group' => $this->productGroup, 'updated' => $this->updated, 'alert' => $this->alert, 'brand' => $this->brand, 'default-quantity' => $this->defaultQuantity, 'deleted' => $this->deleted, 'description' => $this->description, 'description-t9n' => $this->descriptionT9N, 'ean' => $this->ean, 'expiration' => $this->expiration, 'html-description' => $this->htmlDescription, 'html-description-t9n' => $this->htmlDescriptionT9N, 'labels' => $this->labels, 'model-number' => $this->modelNumber, 'modifiers' => $this->modifiers, 'name-t9n' => $this->nameT9N, 'plu' => $this->plu, 'price' => $this->price, 'purchase-price' => $this->purchasePrice, 'sku' => $this->sku, 'tags' => $this->tags, 'type' => $this->type, 'unit' => $this->unit, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'voucher-coupon-product' => $this->voucherCouponProduct, 'voucher-coupon-quantity' => $this->voucherCouponQuantity, 'voucher-payment-method' => $this->voucherPaymentMethod ];
		}
	}

	class ProductEntry extends Onslip360Object {
		function __construct(
			public ProductEntry\Type $type,
			public Stored_Product|null $product = null,
			public Stored_ProductGroup|null $productGroup = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(ProductEntry\Type::from(...), $j['type']), Stored_Product::o($j['product'] ?? null), Stored_ProductGroup::o($j['product-group'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type, 'product' => $this->product, 'product-group' => $this->productGroup ];
		}
	}

	class Partial_ProductEntry extends Onslip360Object {
		function __construct(
			public Partial_Product|null|Nil $product = null,
			public Partial_ProductGroup|null|Nil $productGroup = null,
			public ProductEntry\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_Product::o($j['product'] ?? null), Partial_ProductGroup::o($j['product-group'] ?? null), static::e(ProductEntry\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'product' => $this->product, 'product-group' => $this->productGroup, 'type' => $this->type ];
		}
	}

	class ProductGroup extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param int[]|null $modifiers
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $name,
			public ProductGroup\Type $type,
			public float $vatRate,
			public int|null $account = null,
			public string|null $alert = null,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $discountAccount = null,
			public int|null $id = null,
			public Peripheral\PeripheralFunction|null $kitchenPrinter = null,
			public array|null $labels = null,
			public array|null $modifiers = null,
			public array|null $tags = null,
			public bool|null $undiscountable = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $vatAccount = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], static::e(ProductGroup\Type::from(...), $j['type']), $j['vat-rate'], $j['account'] ?? null, $j['alert'] ?? null, $j['created'] ?? null, $j['deleted'] ?? null, $j['discount-account'] ?? null, $j['id'] ?? null, static::e(Peripheral\PeripheralFunction::from(...), $j['kitchen-printer'] ?? null), $j['labels'] ?? null, $j['modifiers'] ?? null, $j['tags'] ?? null, $j['undiscountable'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['vat-account'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'type' => $this->type, 'vat-rate' => $this->vatRate, 'account' => $this->account, 'alert' => $this->alert, 'created' => $this->created, 'deleted' => $this->deleted, 'discount-account' => $this->discountAccount, 'id' => $this->id, 'kitchen-printer' => $this->kitchenPrinter, 'labels' => $this->labels, 'modifiers' => $this->modifiers, 'tags' => $this->tags, 'undiscountable' => $this->undiscountable, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'vat-account' => $this->vatAccount ];
		}
	}

	class Partial_ProductGroup extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param int[]|null|Nil $modifiers
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public int|null|Nil $account = null,
			public string|null|Nil $alert = null,
			public string|null|Nil $deleted = null,
			public int|null|Nil $discountAccount = null,
			public Peripheral\PeripheralFunction|null|Nil $kitchenPrinter = null,
			public array|null|Nil $labels = null,
			public array|null|Nil $modifiers = null,
			public string|null $name = null,
			public array|null|Nil $tags = null,
			public ProductGroup\Type|null $type = null,
			public bool|null|Nil $undiscountable = null,
			public int|null|Nil $vatAccount = null,
			public float|null $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['account'] ?? null, $j['alert'] ?? null, $j['deleted'] ?? null, $j['discount-account'] ?? null, static::e(Peripheral\PeripheralFunction::from(...), $j['kitchen-printer'] ?? null), $j['labels'] ?? null, $j['modifiers'] ?? null, $j['name'] ?? null, $j['tags'] ?? null, static::e(ProductGroup\Type::from(...), $j['type'] ?? null), $j['undiscountable'] ?? null, $j['vat-account'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'account' => $this->account, 'alert' => $this->alert, 'deleted' => $this->deleted, 'discount-account' => $this->discountAccount, 'kitchen-printer' => $this->kitchenPrinter, 'labels' => $this->labels, 'modifiers' => $this->modifiers, 'name' => $this->name, 'tags' => $this->tags, 'type' => $this->type, 'undiscountable' => $this->undiscountable, 'vat-account' => $this->vatAccount, 'vat-rate' => $this->vatRate ];
		}
	}

	class Stored_ProductGroup extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param int[]|null $modifiers
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $name,
			public ProductGroup\Type $type,
			public string $updated,
			public float $vatRate,
			public int|null $account = null,
			public string|null $alert = null,
			public string|null $deleted = null,
			public int|null $discountAccount = null,
			public Peripheral\PeripheralFunction|null $kitchenPrinter = null,
			public array|null $labels = null,
			public array|null $modifiers = null,
			public array|null $tags = null,
			public bool|null $undiscountable = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $vatAccount = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['name'], static::e(ProductGroup\Type::from(...), $j['type']), $j['updated'], $j['vat-rate'], $j['account'] ?? null, $j['alert'] ?? null, $j['deleted'] ?? null, $j['discount-account'] ?? null, static::e(Peripheral\PeripheralFunction::from(...), $j['kitchen-printer'] ?? null), $j['labels'] ?? null, $j['modifiers'] ?? null, $j['tags'] ?? null, $j['undiscountable'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['vat-account'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'type' => $this->type, 'updated' => $this->updated, 'vat-rate' => $this->vatRate, 'account' => $this->account, 'alert' => $this->alert, 'deleted' => $this->deleted, 'discount-account' => $this->discountAccount, 'kitchen-printer' => $this->kitchenPrinter, 'labels' => $this->labels, 'modifiers' => $this->modifiers, 'tags' => $this->tags, 'undiscountable' => $this->undiscountable, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'vat-account' => $this->vatAccount ];
		}
	}

	class ProductGroupAccount extends Onslip360Object {
		function __construct(
			public int $productGroup,
			public int|null $account = null,
			public int|null $discountAccount = null,
			public int|null $vatAccount = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['product-group'], $j['account'] ?? null, $j['discount-account'] ?? null, $j['vat-account'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'product-group' => $this->productGroup, 'account' => $this->account, 'discount-account' => $this->discountAccount, 'vat-account' => $this->vatAccount ];
		}
	}

	class Partial_ProductGroupAccount extends Onslip360Object {
		function __construct(
			public int|null|Nil $account = null,
			public int|null|Nil $discountAccount = null,
			public int|null $productGroup = null,
			public int|null|Nil $vatAccount = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['account'] ?? null, $j['discount-account'] ?? null, $j['product-group'] ?? null, $j['vat-account'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'account' => $this->account, 'discount-account' => $this->discountAccount, 'product-group' => $this->productGroup, 'vat-account' => $this->vatAccount ];
		}
	}

	class ProductGroupSummary extends Onslip360Object {
		function __construct(
			public float $amount,
			public int $productGroup,
			public string $productGroupName,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'], $j['product-group'], $j['product-group-name'] ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'product-group' => $this->productGroup, 'product-group-name' => $this->productGroupName ];
		}
	}

	class Partial_ProductGroupSummary extends Onslip360Object {
		function __construct(
			public float|null $amount = null,
			public int|null $productGroup = null,
			public string|null $productGroupName = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['product-group'] ?? null, $j['product-group-name'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'product-group' => $this->productGroup, 'product-group-name' => $this->productGroupName ];
		}
	}

	class ProductModifier extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param int[]|null $products
		 * @param string[]|null $tags
		 * @param string[]|null $values
		*/
		function __construct(
			public bool $automatic,
			public string $name,
			public ProductModifier\Type $type,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $products = null,
			public bool|null $required = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public array|null $values = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['automatic'], $j['name'], static::e(ProductModifier\Type::from(...), $j['type']), $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['products'] ?? null, $j['required'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['values'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'automatic' => $this->automatic, 'name' => $this->name, 'type' => $this->type, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'products' => $this->products, 'required' => $this->required, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'values' => $this->values ];
		}
	}

	class Partial_ProductModifier extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param int[]|null|Nil $products
		 * @param string[]|null|Nil $tags
		 * @param string[]|null|Nil $values
		*/
		function __construct(
			public bool|null $automatic = null,
			public string|null|Nil $deleted = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public array|null|Nil $products = null,
			public bool|null|Nil $required = null,
			public array|null|Nil $tags = null,
			public ProductModifier\Type|null $type = null,
			public array|null|Nil $values = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['automatic'] ?? null, $j['deleted'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['products'] ?? null, $j['required'] ?? null, $j['tags'] ?? null, static::e(ProductModifier\Type::from(...), $j['type'] ?? null), $j['values'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'automatic' => $this->automatic, 'deleted' => $this->deleted, 'labels' => $this->labels, 'name' => $this->name, 'products' => $this->products, 'required' => $this->required, 'tags' => $this->tags, 'type' => $this->type, 'values' => $this->values ];
		}
	}

	class Stored_ProductModifier extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param int[]|null $products
		 * @param string[]|null $tags
		 * @param string[]|null $values
		*/
		function __construct(
			public bool $automatic,
			public string $created,
			public int $id,
			public string $name,
			public ProductModifier\Type $type,
			public string $updated,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $products = null,
			public bool|null $required = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public array|null $values = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['automatic'], $j['created'], $j['id'], $j['name'], static::e(ProductModifier\Type::from(...), $j['type']), $j['updated'], $j['deleted'] ?? null, $j['labels'] ?? null, $j['products'] ?? null, $j['required'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['values'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'automatic' => $this->automatic, 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'type' => $this->type, 'updated' => $this->updated, 'deleted' => $this->deleted, 'labels' => $this->labels, 'products' => $this->products, 'required' => $this->required, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'values' => $this->values ];
		}
	}

	class QueryTrigger extends Onslip360Object {
		/**
		 * @param DataObjectOperation\Operation[]|null $operations
		*/
		function __construct(
			public string $query,
			public string $resource,
			public array|null $operations = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['query'], $j['resource'], static::e(DataObjectOperation\Operation::from(...), $j['operations'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'query' => $this->query, 'resource' => $this->resource, 'operations' => $this->operations ];
		}
	}

	class Partial_QueryTrigger extends Onslip360Object {
		/**
		 * @param DataObjectOperation\Operation[]|null|Nil $operations
		*/
		function __construct(
			public array|null|Nil $operations = null,
			public string|null $query = null,
			public string|null $resource = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(DataObjectOperation\Operation::from(...), $j['operations'] ?? null), $j['query'] ?? null, $j['resource'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'operations' => $this->operations, 'query' => $this->query, 'resource' => $this->resource ];
		}
	}

	class Receipt extends Onslip360Object {
		/**
		 * @param Item[] $items
		 * @param Payment[] $payments
		 * @param VATSummary[] $vatSummaries
		*/
		function __construct(
			public float $change,
			public string $id,
			public array $items,
			public array $payments,
			public float $rounding,
			public float $totalAmount,
			public float $totalVatAmount,
			public Receipt\Type $type,
			public array $vatSummaries,
			public Customer|null $customer = null,
			public int|null $order = null,
			public string|null $reference = null,
			public int|null $tab = null,
			public float|null $totalSalesAmount = null,
			public float|null $totalSalesVatAmount = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['change'], $j['id'], Item::a($j['items']), Payment::a($j['payments']), $j['rounding'], $j['total-amount'], $j['total-vat-amount'], static::e(Receipt\Type::from(...), $j['type']), VATSummary::a($j['vat-summaries']), Customer::o($j['customer'] ?? null), $j['order'] ?? null, $j['reference'] ?? null, $j['tab'] ?? null, $j['total-sales-amount'] ?? null, $j['total-sales-vat-amount'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'change' => $this->change, 'id' => $this->id, 'items' => $this->items, 'payments' => $this->payments, 'rounding' => $this->rounding, 'total-amount' => $this->totalAmount, 'total-vat-amount' => $this->totalVatAmount, 'type' => $this->type, 'vat-summaries' => $this->vatSummaries, 'customer' => $this->customer, 'order' => $this->order, 'reference' => $this->reference, 'tab' => $this->tab, 'total-sales-amount' => $this->totalSalesAmount, 'total-sales-vat-amount' => $this->totalSalesVatAmount ];
		}
	}

	class Partial_Receipt extends Onslip360Object {
		/**
		 * @param Partial_Item[]|null $items
		 * @param Partial_Payment[]|null $payments
		 * @param Partial_VATSummary[]|null $vatSummaries
		*/
		function __construct(
			public float|null $change = null,
			public Partial_Customer|null|Nil $customer = null,
			public string|null $id = null,
			public array|null $items = null,
			public int|null|Nil $order = null,
			public array|null $payments = null,
			public string|null|Nil $reference = null,
			public float|null $rounding = null,
			public int|null|Nil $tab = null,
			public float|null $totalAmount = null,
			public float|null|Nil $totalSalesAmount = null,
			public float|null|Nil $totalSalesVatAmount = null,
			public float|null $totalVatAmount = null,
			public Receipt\Type|null $type = null,
			public array|null $vatSummaries = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['change'] ?? null, Partial_Customer::o($j['customer'] ?? null), $j['id'] ?? null, Partial_Item::a($j['items'] ?? null), $j['order'] ?? null, Partial_Payment::a($j['payments'] ?? null), $j['reference'] ?? null, $j['rounding'] ?? null, $j['tab'] ?? null, $j['total-amount'] ?? null, $j['total-sales-amount'] ?? null, $j['total-sales-vat-amount'] ?? null, $j['total-vat-amount'] ?? null, static::e(Receipt\Type::from(...), $j['type'] ?? null), Partial_VATSummary::a($j['vat-summaries'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'change' => $this->change, 'customer' => $this->customer, 'id' => $this->id, 'items' => $this->items, 'order' => $this->order, 'payments' => $this->payments, 'reference' => $this->reference, 'rounding' => $this->rounding, 'tab' => $this->tab, 'total-amount' => $this->totalAmount, 'total-sales-amount' => $this->totalSalesAmount, 'total-sales-vat-amount' => $this->totalSalesVatAmount, 'total-vat-amount' => $this->totalVatAmount, 'type' => $this->type, 'vat-summaries' => $this->vatSummaries ];
		}
	}

	class Record extends Onslip360Object {
		/**
		 * @param AccountingEntry[]|null $accounting
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $address,
			public int $batchId,
			public int $cashier,
			public string $cashierName,
			public string $companyName,
			public int $copies,
			public string $date,
			public string $orgNumber,
			public bool $training,
			public Record\Type $type,
			public array|null $accounting = null,
			public Batch|null $batch = null,
			public CardTransaction|null $cardTransaction = null,
			public CashDrawer|null $cashDrawer = null,
			public int|null $client = null,
			public string|null $clientName = null,
			public string|null $controlCode = null,
			public string|null $controlUnitId = null,
			public int|null $copyFrom = null,
			public int|null $copyOf = null,
			public string|null $created = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public string|null $email = null,
			public EntertainmentBill|null $entertainmentBill = null,
			public int|null $id = null,
			public InvalidPayload|null $invalidPayload = null,
			public array|null $labels = null,
			public OrderTicket|null $orderTicket = null,
			public string|null $phoneNumber = null,
			public ProductEntry|null $product = null,
			public string|null $queued = null,
			public Receipt|null $receipt = null,
			public string|null $receiptFooter = null,
			public string|null $receiptHeader = null,
			public string|null $recipientUri = null,
			public Report|null $report = null,
			public string|null $storeAddress = null,
			public string|null $storeName = null,
			public Tab|null $tab = null,
			public array|null $tags = null,
			public int|null $timezoneOffset = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public UsageEntry|null $usage = null,
			public string|null $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['address'], $j['batch-id'], $j['cashier'], $j['cashier-name'], $j['company-name'], $j['copies'], $j['date'], $j['org-number'], $j['training'], static::e(Record\Type::from(...), $j['type']), AccountingEntry::a($j['accounting'] ?? null), Batch::o($j['batch'] ?? null), CardTransaction::o($j['card-transaction'] ?? null), CashDrawer::o($j['cash-drawer'] ?? null), $j['client'] ?? null, $j['client-name'] ?? null, $j['control-code'] ?? null, $j['control-unit-id'] ?? null, $j['copy-from'] ?? null, $j['copy-of'] ?? null, $j['created'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['email'] ?? null, EntertainmentBill::o($j['entertainment-bill'] ?? null), $j['id'] ?? null, InvalidPayload::o($j['invalid-payload'] ?? null), $j['labels'] ?? null, OrderTicket::o($j['order-ticket'] ?? null), $j['phone-number'] ?? null, ProductEntry::o($j['product'] ?? null), $j['queued'] ?? null, Receipt::o($j['receipt'] ?? null), $j['receipt-footer'] ?? null, $j['receipt-header'] ?? null, $j['recipient-uri'] ?? null, Report::o($j['report'] ?? null), $j['store-address'] ?? null, $j['store-name'] ?? null, Tab::o($j['tab'] ?? null), $j['tags'] ?? null, $j['timezone-offset'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, UsageEntry::o($j['usage'] ?? null), $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'address' => $this->address, 'batch-id' => $this->batchId, 'cashier' => $this->cashier, 'cashier-name' => $this->cashierName, 'company-name' => $this->companyName, 'copies' => $this->copies, 'date' => $this->date, 'org-number' => $this->orgNumber, 'training' => $this->training, 'type' => $this->type, 'accounting' => $this->accounting, 'batch' => $this->batch, 'card-transaction' => $this->cardTransaction, 'cash-drawer' => $this->cashDrawer, 'client' => $this->client, 'client-name' => $this->clientName, 'control-code' => $this->controlCode, 'control-unit-id' => $this->controlUnitId, 'copy-from' => $this->copyFrom, 'copy-of' => $this->copyOf, 'created' => $this->created, 'deleted' => $this->deleted, 'description' => $this->description, 'email' => $this->email, 'entertainment-bill' => $this->entertainmentBill, 'id' => $this->id, 'invalid-payload' => $this->invalidPayload, 'labels' => $this->labels, 'order-ticket' => $this->orderTicket, 'phone-number' => $this->phoneNumber, 'product' => $this->product, 'queued' => $this->queued, 'receipt' => $this->receipt, 'receipt-footer' => $this->receiptFooter, 'receipt-header' => $this->receiptHeader, 'recipient-uri' => $this->recipientUri, 'report' => $this->report, 'store-address' => $this->storeAddress, 'store-name' => $this->storeName, 'tab' => $this->tab, 'tags' => $this->tags, 'timezone-offset' => $this->timezoneOffset, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'usage' => $this->usage, 'web-address' => $this->webAddress ];
		}
	}

	class Partial_Record extends Onslip360Object {
		/**
		 * @param Partial_AccountingEntry[]|null|Nil $accounting
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public array|null|Nil $accounting = null,
			public string|null $address = null,
			public Partial_Batch|null|Nil $batch = null,
			public int|null $batchId = null,
			public Partial_CardTransaction|null|Nil $cardTransaction = null,
			public Partial_CashDrawer|null|Nil $cashDrawer = null,
			public int|null $cashier = null,
			public string|null $cashierName = null,
			public string|null|Nil $clientName = null,
			public string|null $companyName = null,
			public string|null|Nil $controlCode = null,
			public string|null|Nil $controlUnitId = null,
			public int|null $copies = null,
			public int|null|Nil $copyFrom = null,
			public int|null|Nil $copyOf = null,
			public string|null $date = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $description = null,
			public string|null|Nil $email = null,
			public Partial_EntertainmentBill|null|Nil $entertainmentBill = null,
			public Partial_InvalidPayload|null|Nil $invalidPayload = null,
			public array|null|Nil $labels = null,
			public Partial_OrderTicket|null|Nil $orderTicket = null,
			public string|null $orgNumber = null,
			public string|null|Nil $phoneNumber = null,
			public Partial_ProductEntry|null|Nil $product = null,
			public string|null|Nil $queued = null,
			public Partial_Receipt|null|Nil $receipt = null,
			public string|null|Nil $receiptFooter = null,
			public string|null|Nil $receiptHeader = null,
			public string|null|Nil $recipientUri = null,
			public Partial_Report|null|Nil $report = null,
			public string|null|Nil $storeAddress = null,
			public string|null|Nil $storeName = null,
			public Partial_Tab|null|Nil $tab = null,
			public array|null|Nil $tags = null,
			public int|null|Nil $timezoneOffset = null,
			public bool|null $training = null,
			public Record\Type|null $type = null,
			public Partial_UsageEntry|null|Nil $usage = null,
			public string|null|Nil $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_AccountingEntry::a($j['accounting'] ?? null), $j['address'] ?? null, Partial_Batch::o($j['batch'] ?? null), $j['batch-id'] ?? null, Partial_CardTransaction::o($j['card-transaction'] ?? null), Partial_CashDrawer::o($j['cash-drawer'] ?? null), $j['cashier'] ?? null, $j['cashier-name'] ?? null, $j['client-name'] ?? null, $j['company-name'] ?? null, $j['control-code'] ?? null, $j['control-unit-id'] ?? null, $j['copies'] ?? null, $j['copy-from'] ?? null, $j['copy-of'] ?? null, $j['date'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['email'] ?? null, Partial_EntertainmentBill::o($j['entertainment-bill'] ?? null), Partial_InvalidPayload::o($j['invalid-payload'] ?? null), $j['labels'] ?? null, Partial_OrderTicket::o($j['order-ticket'] ?? null), $j['org-number'] ?? null, $j['phone-number'] ?? null, Partial_ProductEntry::o($j['product'] ?? null), $j['queued'] ?? null, Partial_Receipt::o($j['receipt'] ?? null), $j['receipt-footer'] ?? null, $j['receipt-header'] ?? null, $j['recipient-uri'] ?? null, Partial_Report::o($j['report'] ?? null), $j['store-address'] ?? null, $j['store-name'] ?? null, Partial_Tab::o($j['tab'] ?? null), $j['tags'] ?? null, $j['timezone-offset'] ?? null, $j['training'] ?? null, static::e(Record\Type::from(...), $j['type'] ?? null), Partial_UsageEntry::o($j['usage'] ?? null), $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'accounting' => $this->accounting, 'address' => $this->address, 'batch' => $this->batch, 'batch-id' => $this->batchId, 'card-transaction' => $this->cardTransaction, 'cash-drawer' => $this->cashDrawer, 'cashier' => $this->cashier, 'cashier-name' => $this->cashierName, 'client-name' => $this->clientName, 'company-name' => $this->companyName, 'control-code' => $this->controlCode, 'control-unit-id' => $this->controlUnitId, 'copies' => $this->copies, 'copy-from' => $this->copyFrom, 'copy-of' => $this->copyOf, 'date' => $this->date, 'deleted' => $this->deleted, 'description' => $this->description, 'email' => $this->email, 'entertainment-bill' => $this->entertainmentBill, 'invalid-payload' => $this->invalidPayload, 'labels' => $this->labels, 'order-ticket' => $this->orderTicket, 'org-number' => $this->orgNumber, 'phone-number' => $this->phoneNumber, 'product' => $this->product, 'queued' => $this->queued, 'receipt' => $this->receipt, 'receipt-footer' => $this->receiptFooter, 'receipt-header' => $this->receiptHeader, 'recipient-uri' => $this->recipientUri, 'report' => $this->report, 'store-address' => $this->storeAddress, 'store-name' => $this->storeName, 'tab' => $this->tab, 'tags' => $this->tags, 'timezone-offset' => $this->timezoneOffset, 'training' => $this->training, 'type' => $this->type, 'usage' => $this->usage, 'web-address' => $this->webAddress ];
		}
	}

	class Stored_Record extends Onslip360Object {
		/**
		 * @param AccountingEntry[]|null $accounting
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $address,
			public int $batchId,
			public int $cashier,
			public string $cashierName,
			public int $client,
			public string $companyName,
			public int $copies,
			public string $created,
			public string $date,
			public int $id,
			public string $orgNumber,
			public bool $training,
			public Record\Type $type,
			public string $updated,
			public array|null $accounting = null,
			public Batch|null $batch = null,
			public CardTransaction|null $cardTransaction = null,
			public CashDrawer|null $cashDrawer = null,
			public string|null $clientName = null,
			public string|null $controlCode = null,
			public string|null $controlUnitId = null,
			public int|null $copyFrom = null,
			public int|null $copyOf = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public string|null $email = null,
			public EntertainmentBill|null $entertainmentBill = null,
			public InvalidPayload|null $invalidPayload = null,
			public array|null $labels = null,
			public OrderTicket|null $orderTicket = null,
			public string|null $phoneNumber = null,
			public ProductEntry|null $product = null,
			public string|null $queued = null,
			public Receipt|null $receipt = null,
			public string|null $receiptFooter = null,
			public string|null $receiptHeader = null,
			public string|null $recipientUri = null,
			public Report|null $report = null,
			public string|null $storeAddress = null,
			public string|null $storeName = null,
			public Tab|null $tab = null,
			public array|null $tags = null,
			public int|null $timezoneOffset = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public UsageEntry|null $usage = null,
			public string|null $webAddress = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['address'], $j['batch-id'], $j['cashier'], $j['cashier-name'], $j['client'], $j['company-name'], $j['copies'], $j['created'], $j['date'], $j['id'], $j['org-number'], $j['training'], static::e(Record\Type::from(...), $j['type']), $j['updated'], AccountingEntry::a($j['accounting'] ?? null), Batch::o($j['batch'] ?? null), CardTransaction::o($j['card-transaction'] ?? null), CashDrawer::o($j['cash-drawer'] ?? null), $j['client-name'] ?? null, $j['control-code'] ?? null, $j['control-unit-id'] ?? null, $j['copy-from'] ?? null, $j['copy-of'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['email'] ?? null, EntertainmentBill::o($j['entertainment-bill'] ?? null), InvalidPayload::o($j['invalid-payload'] ?? null), $j['labels'] ?? null, OrderTicket::o($j['order-ticket'] ?? null), $j['phone-number'] ?? null, ProductEntry::o($j['product'] ?? null), $j['queued'] ?? null, Receipt::o($j['receipt'] ?? null), $j['receipt-footer'] ?? null, $j['receipt-header'] ?? null, $j['recipient-uri'] ?? null, Report::o($j['report'] ?? null), $j['store-address'] ?? null, $j['store-name'] ?? null, Tab::o($j['tab'] ?? null), $j['tags'] ?? null, $j['timezone-offset'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, UsageEntry::o($j['usage'] ?? null), $j['web-address'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'address' => $this->address, 'batch-id' => $this->batchId, 'cashier' => $this->cashier, 'cashier-name' => $this->cashierName, 'client' => $this->client, 'company-name' => $this->companyName, 'copies' => $this->copies, 'created' => $this->created, 'date' => $this->date, 'id' => $this->id, 'org-number' => $this->orgNumber, 'training' => $this->training, 'type' => $this->type, 'updated' => $this->updated, 'accounting' => $this->accounting, 'batch' => $this->batch, 'card-transaction' => $this->cardTransaction, 'cash-drawer' => $this->cashDrawer, 'client-name' => $this->clientName, 'control-code' => $this->controlCode, 'control-unit-id' => $this->controlUnitId, 'copy-from' => $this->copyFrom, 'copy-of' => $this->copyOf, 'deleted' => $this->deleted, 'description' => $this->description, 'email' => $this->email, 'entertainment-bill' => $this->entertainmentBill, 'invalid-payload' => $this->invalidPayload, 'labels' => $this->labels, 'order-ticket' => $this->orderTicket, 'phone-number' => $this->phoneNumber, 'product' => $this->product, 'queued' => $this->queued, 'receipt' => $this->receipt, 'receipt-footer' => $this->receiptFooter, 'receipt-header' => $this->receiptHeader, 'recipient-uri' => $this->recipientUri, 'report' => $this->report, 'store-address' => $this->storeAddress, 'store-name' => $this->storeName, 'tab' => $this->tab, 'tags' => $this->tags, 'timezone-offset' => $this->timezoneOffset, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'usage' => $this->usage, 'web-address' => $this->webAddress ];
		}
	}

	class Report extends Onslip360Object {
		/**
		 * @param GratuitySummary[]|null $gratuitySummaries
		 * @param Payment[]|null $incomingPettyCash
		 * @param Payment[]|null $outgoingPettyCash
		 * @param PaymentBatchSummary[]|null $paymentBatchSummaries
		 * @param PaymentSaleSummary[]|null $paymentSaleSummaries
		 * @param Payment[]|null $payments
		 * @param PaymentSummary[]|null $pettyCashDeposits
		 * @param Payment[]|null $pettyCashMismatch
		 * @param PaymentSummary[]|null $pettyCashWithdrawals
		 * @param ProductGroupSummary[]|null $productGroupSummaries
		 * @param VATSummary[]|null $vatSummaries
		*/
		function __construct(
			public int $cashDrawerOpenings,
			public Summary $discounts,
			public Summary $goods,
			public Summary $grandTotalAmount,
			public Summary $grandTotalReturns,
			public Summary $grandTotalSales,
			public string $id,
			public Summary $losses,
			public Summary $receiptCopies,
			public Summary $returnReceipts,
			public Summary $salesReceipts,
			public Summary $services,
			public float $totalSalesAmount,
			public Summary $trainingReceipts,
			public Report\Type $type,
			public Summary|null $cashDeposits = null,
			public Summary|null $cashWithdrawals = null,
			public Summary|null $creditReturns = null,
			public Summary|null $creditSales = null,
			public string|null $endDate = null,
			public array|null $gratuitySummaries = null,
			public float|null $incomingCashAmount = null,
			public array|null $incomingPettyCash = null,
			public Summary|null $liabilities = null,
			public Summary|null $openTabs = null,
			public float|null $outgoingCashAmount = null,
			public array|null $outgoingPettyCash = null,
			public array|null $paymentBatchSummaries = null,
			public array|null $paymentSaleSummaries = null,
			public array|null $payments = null,
			public array|null $pettyCashDeposits = null,
			public array|null $pettyCashMismatch = null,
			public array|null $pettyCashWithdrawals = null,
			public array|null $productGroupSummaries = null,
			public string|null $startDate = null,
			public float|null $totalAmount = null,
			public float|null $totalChangeAmount = null,
			public float|null $totalSalesVatAmount = null,
			public float|null $totalVatAmount = null,
			public array|null $vatSummaries = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['cash-drawer-openings'], Summary::o($j['discounts']), Summary::o($j['goods']), Summary::o($j['grand-total-amount']), Summary::o($j['grand-total-returns']), Summary::o($j['grand-total-sales']), $j['id'], Summary::o($j['losses']), Summary::o($j['receipt-copies']), Summary::o($j['return-receipts']), Summary::o($j['sales-receipts']), Summary::o($j['services']), $j['total-sales-amount'], Summary::o($j['training-receipts']), static::e(Report\Type::from(...), $j['type']), Summary::o($j['cash-deposits'] ?? null), Summary::o($j['cash-withdrawals'] ?? null), Summary::o($j['credit-returns'] ?? null), Summary::o($j['credit-sales'] ?? null), $j['end-date'] ?? null, GratuitySummary::a($j['gratuity-summaries'] ?? null), $j['incoming-cash-amount'] ?? null, Payment::a($j['incoming-petty-cash'] ?? null), Summary::o($j['liabilities'] ?? null), Summary::o($j['open-tabs'] ?? null), $j['outgoing-cash-amount'] ?? null, Payment::a($j['outgoing-petty-cash'] ?? null), PaymentBatchSummary::a($j['payment-batch-summaries'] ?? null), PaymentSaleSummary::a($j['payment-sale-summaries'] ?? null), Payment::a($j['payments'] ?? null), PaymentSummary::a($j['petty-cash-deposits'] ?? null), Payment::a($j['petty-cash-mismatch'] ?? null), PaymentSummary::a($j['petty-cash-withdrawals'] ?? null), ProductGroupSummary::a($j['product-group-summaries'] ?? null), $j['start-date'] ?? null, $j['total-amount'] ?? null, $j['total-change-amount'] ?? null, $j['total-sales-vat-amount'] ?? null, $j['total-vat-amount'] ?? null, VATSummary::a($j['vat-summaries'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'cash-drawer-openings' => $this->cashDrawerOpenings, 'discounts' => $this->discounts, 'goods' => $this->goods, 'grand-total-amount' => $this->grandTotalAmount, 'grand-total-returns' => $this->grandTotalReturns, 'grand-total-sales' => $this->grandTotalSales, 'id' => $this->id, 'losses' => $this->losses, 'receipt-copies' => $this->receiptCopies, 'return-receipts' => $this->returnReceipts, 'sales-receipts' => $this->salesReceipts, 'services' => $this->services, 'total-sales-amount' => $this->totalSalesAmount, 'training-receipts' => $this->trainingReceipts, 'type' => $this->type, 'cash-deposits' => $this->cashDeposits, 'cash-withdrawals' => $this->cashWithdrawals, 'credit-returns' => $this->creditReturns, 'credit-sales' => $this->creditSales, 'end-date' => $this->endDate, 'gratuity-summaries' => $this->gratuitySummaries, 'incoming-cash-amount' => $this->incomingCashAmount, 'incoming-petty-cash' => $this->incomingPettyCash, 'liabilities' => $this->liabilities, 'open-tabs' => $this->openTabs, 'outgoing-cash-amount' => $this->outgoingCashAmount, 'outgoing-petty-cash' => $this->outgoingPettyCash, 'payment-batch-summaries' => $this->paymentBatchSummaries, 'payment-sale-summaries' => $this->paymentSaleSummaries, 'payments' => $this->payments, 'petty-cash-deposits' => $this->pettyCashDeposits, 'petty-cash-mismatch' => $this->pettyCashMismatch, 'petty-cash-withdrawals' => $this->pettyCashWithdrawals, 'product-group-summaries' => $this->productGroupSummaries, 'start-date' => $this->startDate, 'total-amount' => $this->totalAmount, 'total-change-amount' => $this->totalChangeAmount, 'total-sales-vat-amount' => $this->totalSalesVatAmount, 'total-vat-amount' => $this->totalVatAmount, 'vat-summaries' => $this->vatSummaries ];
		}
	}

	class Partial_Report extends Onslip360Object {
		/**
		 * @param Partial_GratuitySummary[]|null|Nil $gratuitySummaries
		 * @param Partial_Payment[]|null|Nil $incomingPettyCash
		 * @param Partial_Payment[]|null|Nil $outgoingPettyCash
		 * @param Partial_PaymentBatchSummary[]|null|Nil $paymentBatchSummaries
		 * @param Partial_PaymentSaleSummary[]|null|Nil $paymentSaleSummaries
		 * @param Partial_Payment[]|null|Nil $payments
		 * @param Partial_PaymentSummary[]|null|Nil $pettyCashDeposits
		 * @param Partial_Payment[]|null|Nil $pettyCashMismatch
		 * @param Partial_PaymentSummary[]|null|Nil $pettyCashWithdrawals
		 * @param Partial_ProductGroupSummary[]|null|Nil $productGroupSummaries
		 * @param Partial_VATSummary[]|null|Nil $vatSummaries
		*/
		function __construct(
			public Partial_Summary|null|Nil $cashDeposits = null,
			public int|null $cashDrawerOpenings = null,
			public Partial_Summary|null|Nil $cashWithdrawals = null,
			public Partial_Summary|null|Nil $creditReturns = null,
			public Partial_Summary|null|Nil $creditSales = null,
			public Partial_Summary|null $discounts = null,
			public string|null|Nil $endDate = null,
			public Partial_Summary|null $goods = null,
			public Partial_Summary|null $grandTotalAmount = null,
			public Partial_Summary|null $grandTotalReturns = null,
			public Partial_Summary|null $grandTotalSales = null,
			public array|null|Nil $gratuitySummaries = null,
			public string|null $id = null,
			public float|null|Nil $incomingCashAmount = null,
			public array|null|Nil $incomingPettyCash = null,
			public Partial_Summary|null|Nil $liabilities = null,
			public Partial_Summary|null $losses = null,
			public Partial_Summary|null|Nil $openTabs = null,
			public float|null|Nil $outgoingCashAmount = null,
			public array|null|Nil $outgoingPettyCash = null,
			public array|null|Nil $paymentBatchSummaries = null,
			public array|null|Nil $paymentSaleSummaries = null,
			public array|null|Nil $payments = null,
			public array|null|Nil $pettyCashDeposits = null,
			public array|null|Nil $pettyCashMismatch = null,
			public array|null|Nil $pettyCashWithdrawals = null,
			public array|null|Nil $productGroupSummaries = null,
			public Partial_Summary|null $receiptCopies = null,
			public Partial_Summary|null $returnReceipts = null,
			public Partial_Summary|null $salesReceipts = null,
			public Partial_Summary|null $services = null,
			public string|null|Nil $startDate = null,
			public float|null|Nil $totalAmount = null,
			public float|null|Nil $totalChangeAmount = null,
			public float|null $totalSalesAmount = null,
			public float|null|Nil $totalSalesVatAmount = null,
			public float|null|Nil $totalVatAmount = null,
			public Partial_Summary|null $trainingReceipts = null,
			public Report\Type|null $type = null,
			public array|null|Nil $vatSummaries = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_Summary::o($j['cash-deposits'] ?? null), $j['cash-drawer-openings'] ?? null, Partial_Summary::o($j['cash-withdrawals'] ?? null), Partial_Summary::o($j['credit-returns'] ?? null), Partial_Summary::o($j['credit-sales'] ?? null), Partial_Summary::o($j['discounts'] ?? null), $j['end-date'] ?? null, Partial_Summary::o($j['goods'] ?? null), Partial_Summary::o($j['grand-total-amount'] ?? null), Partial_Summary::o($j['grand-total-returns'] ?? null), Partial_Summary::o($j['grand-total-sales'] ?? null), Partial_GratuitySummary::a($j['gratuity-summaries'] ?? null), $j['id'] ?? null, $j['incoming-cash-amount'] ?? null, Partial_Payment::a($j['incoming-petty-cash'] ?? null), Partial_Summary::o($j['liabilities'] ?? null), Partial_Summary::o($j['losses'] ?? null), Partial_Summary::o($j['open-tabs'] ?? null), $j['outgoing-cash-amount'] ?? null, Partial_Payment::a($j['outgoing-petty-cash'] ?? null), Partial_PaymentBatchSummary::a($j['payment-batch-summaries'] ?? null), Partial_PaymentSaleSummary::a($j['payment-sale-summaries'] ?? null), Partial_Payment::a($j['payments'] ?? null), Partial_PaymentSummary::a($j['petty-cash-deposits'] ?? null), Partial_Payment::a($j['petty-cash-mismatch'] ?? null), Partial_PaymentSummary::a($j['petty-cash-withdrawals'] ?? null), Partial_ProductGroupSummary::a($j['product-group-summaries'] ?? null), Partial_Summary::o($j['receipt-copies'] ?? null), Partial_Summary::o($j['return-receipts'] ?? null), Partial_Summary::o($j['sales-receipts'] ?? null), Partial_Summary::o($j['services'] ?? null), $j['start-date'] ?? null, $j['total-amount'] ?? null, $j['total-change-amount'] ?? null, $j['total-sales-amount'] ?? null, $j['total-sales-vat-amount'] ?? null, $j['total-vat-amount'] ?? null, Partial_Summary::o($j['training-receipts'] ?? null), static::e(Report\Type::from(...), $j['type'] ?? null), Partial_VATSummary::a($j['vat-summaries'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'cash-deposits' => $this->cashDeposits, 'cash-drawer-openings' => $this->cashDrawerOpenings, 'cash-withdrawals' => $this->cashWithdrawals, 'credit-returns' => $this->creditReturns, 'credit-sales' => $this->creditSales, 'discounts' => $this->discounts, 'end-date' => $this->endDate, 'goods' => $this->goods, 'grand-total-amount' => $this->grandTotalAmount, 'grand-total-returns' => $this->grandTotalReturns, 'grand-total-sales' => $this->grandTotalSales, 'gratuity-summaries' => $this->gratuitySummaries, 'id' => $this->id, 'incoming-cash-amount' => $this->incomingCashAmount, 'incoming-petty-cash' => $this->incomingPettyCash, 'liabilities' => $this->liabilities, 'losses' => $this->losses, 'open-tabs' => $this->openTabs, 'outgoing-cash-amount' => $this->outgoingCashAmount, 'outgoing-petty-cash' => $this->outgoingPettyCash, 'payment-batch-summaries' => $this->paymentBatchSummaries, 'payment-sale-summaries' => $this->paymentSaleSummaries, 'payments' => $this->payments, 'petty-cash-deposits' => $this->pettyCashDeposits, 'petty-cash-mismatch' => $this->pettyCashMismatch, 'petty-cash-withdrawals' => $this->pettyCashWithdrawals, 'product-group-summaries' => $this->productGroupSummaries, 'receipt-copies' => $this->receiptCopies, 'return-receipts' => $this->returnReceipts, 'sales-receipts' => $this->salesReceipts, 'services' => $this->services, 'start-date' => $this->startDate, 'total-amount' => $this->totalAmount, 'total-change-amount' => $this->totalChangeAmount, 'total-sales-amount' => $this->totalSalesAmount, 'total-sales-vat-amount' => $this->totalSalesVatAmount, 'total-vat-amount' => $this->totalVatAmount, 'training-receipts' => $this->trainingReceipts, 'type' => $this->type, 'vat-summaries' => $this->vatSummaries ];
		}
	}

	class ReportAction extends Onslip360Object {
		/**
		 * @param string[] $formats
		*/
		function __construct(
			public array $formats,
			public ReportAction\Template $template,
			public string|null $from = null,
			public string|null $fromExpression = null,
			public string|null $locale = null,
			public SalesReportActionParams|null $sales = null,
			public ShiftsReportActionParams|null $shifts = null,
			public StockBalancesReportActionParams|null $stockBalances = null,
			public string|null $to = null,
			public string|null $toExpression = null,
			public VouchersReportActionParams|null $vouchers = null,
			public ZReportActionParams|null $zReport = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['formats'], static::e(ReportAction\Template::from(...), $j['template']), $j['from'] ?? null, $j['from-expression'] ?? null, $j['locale'] ?? null, SalesReportActionParams::o($j['sales'] ?? null), ShiftsReportActionParams::o($j['shifts'] ?? null), StockBalancesReportActionParams::o($j['stock-balances'] ?? null), $j['to'] ?? null, $j['to-expression'] ?? null, VouchersReportActionParams::o($j['vouchers'] ?? null), ZReportActionParams::o($j['z-report'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'formats' => $this->formats, 'template' => $this->template, 'from' => $this->from, 'from-expression' => $this->fromExpression, 'locale' => $this->locale, 'sales' => $this->sales, 'shifts' => $this->shifts, 'stock-balances' => $this->stockBalances, 'to' => $this->to, 'to-expression' => $this->toExpression, 'vouchers' => $this->vouchers, 'z-report' => $this->zReport ];
		}
	}

	class Partial_ReportAction extends Onslip360Object {
		/**
		 * @param string[]|null $formats
		*/
		function __construct(
			public array|null $formats = null,
			public string|null|Nil $from = null,
			public string|null|Nil $fromExpression = null,
			public string|null|Nil $locale = null,
			public Partial_SalesReportActionParams|null|Nil $sales = null,
			public Partial_ShiftsReportActionParams|null|Nil $shifts = null,
			public Partial_StockBalancesReportActionParams|null|Nil $stockBalances = null,
			public ReportAction\Template|null $template = null,
			public string|null|Nil $to = null,
			public string|null|Nil $toExpression = null,
			public Partial_VouchersReportActionParams|null|Nil $vouchers = null,
			public Partial_ZReportActionParams|null|Nil $zReport = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['formats'] ?? null, $j['from'] ?? null, $j['from-expression'] ?? null, $j['locale'] ?? null, Partial_SalesReportActionParams::o($j['sales'] ?? null), Partial_ShiftsReportActionParams::o($j['shifts'] ?? null), Partial_StockBalancesReportActionParams::o($j['stock-balances'] ?? null), static::e(ReportAction\Template::from(...), $j['template'] ?? null), $j['to'] ?? null, $j['to-expression'] ?? null, Partial_VouchersReportActionParams::o($j['vouchers'] ?? null), Partial_ZReportActionParams::o($j['z-report'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'formats' => $this->formats, 'from' => $this->from, 'from-expression' => $this->fromExpression, 'locale' => $this->locale, 'sales' => $this->sales, 'shifts' => $this->shifts, 'stock-balances' => $this->stockBalances, 'template' => $this->template, 'to' => $this->to, 'to-expression' => $this->toExpression, 'vouchers' => $this->vouchers, 'z-report' => $this->zReport ];
		}
	}

	class ReportCoverParams extends Onslip360Object {
		function __construct(
			public ReportDefinition $reportDefinition,
		) {}

		protected static function _fromJson(array $j): array {
			return [ ReportDefinition::o($j['report-definition']) ];
		}

		protected function _toJson(): array {
			return [ 'report-definition' => $this->reportDefinition ];
		}
	}

	class Partial_ReportCoverParams extends Onslip360Object {
		function __construct(
			public Partial_ReportDefinition|null $reportDefinition = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_ReportDefinition::o($j['report-definition'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'report-definition' => $this->reportDefinition ];
		}
	}

	class ReportDefinition extends Onslip360Object {
		function __construct(
			public ReportModel $model,
			public string $reportUri,
		) {}

		protected static function _fromJson(array $j): array {
			return [ ReportModel::o($j['model']), $j['report-uri'] ];
		}

		protected function _toJson(): array {
			return [ 'model' => $this->model, 'report-uri' => $this->reportUri ];
		}
	}

	class Partial_ReportDefinition extends Onslip360Object {
		function __construct(
			public Partial_ReportModel|null $model = null,
			public string|null $reportUri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_ReportModel::o($j['model'] ?? null), $j['report-uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'model' => $this->model, 'report-uri' => $this->reportUri ];
		}
	}

	class ReportModel extends Onslip360Object {
		function __construct(
			public ReportAction $action,
			public string $apiUri,
			public string $hawkId,
			public string $hawkKey,
			public string $name,
			public string $realm,
			public string|null $description = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ ReportAction::o($j['action']), $j['api-uri'], $j['hawk-id'], $j['hawk-key'], $j['name'], $j['realm'], $j['description'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'action' => $this->action, 'api-uri' => $this->apiUri, 'hawk-id' => $this->hawkId, 'hawk-key' => $this->hawkKey, 'name' => $this->name, 'realm' => $this->realm, 'description' => $this->description ];
		}
	}

	class Partial_ReportModel extends Onslip360Object {
		function __construct(
			public Partial_ReportAction|null $action = null,
			public string|null $apiUri = null,
			public string|null|Nil $description = null,
			public string|null $hawkId = null,
			public string|null $hawkKey = null,
			public string|null $name = null,
			public string|null $realm = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_ReportAction::o($j['action'] ?? null), $j['api-uri'] ?? null, $j['description'] ?? null, $j['hawk-id'] ?? null, $j['hawk-key'] ?? null, $j['name'] ?? null, $j['realm'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'action' => $this->action, 'api-uri' => $this->apiUri, 'description' => $this->description, 'hawk-id' => $this->hawkId, 'hawk-key' => $this->hawkKey, 'name' => $this->name, 'realm' => $this->realm ];
		}
	}

	class ResellerParams extends Onslip360Object {
		/**
		 * @param CompanyFeature\Flag[] $availableFeatures
		 * @param CompanyFeature\Flag[] $requiredFeatures
		*/
		function __construct(
			public string $aliasPrefix,
			public array $availableFeatures,
			public MerchantConfig $merchantConfig,
			public array $requiredFeatures,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias-prefix'], static::e(CompanyFeature\Flag::from(...), $j['available-features']), MerchantConfig::o($j['merchant-config']), static::e(CompanyFeature\Flag::from(...), $j['required-features']) ];
		}

		protected function _toJson(): array {
			return [ 'alias-prefix' => $this->aliasPrefix, 'available-features' => $this->availableFeatures, 'merchant-config' => $this->merchantConfig, 'required-features' => $this->requiredFeatures ];
		}
	}

	class Partial_ResellerParams extends Onslip360Object {
		/**
		 * @param CompanyFeature\Flag[]|null $availableFeatures
		 * @param CompanyFeature\Flag[]|null $requiredFeatures
		*/
		function __construct(
			public string|null $aliasPrefix = null,
			public array|null $availableFeatures = null,
			public Partial_MerchantConfig|null $merchantConfig = null,
			public array|null $requiredFeatures = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias-prefix'] ?? null, static::e(CompanyFeature\Flag::from(...), $j['available-features'] ?? null), Partial_MerchantConfig::o($j['merchant-config'] ?? null), static::e(CompanyFeature\Flag::from(...), $j['required-features'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'alias-prefix' => $this->aliasPrefix, 'available-features' => $this->availableFeatures, 'merchant-config' => $this->merchantConfig, 'required-features' => $this->requiredFeatures ];
		}
	}

	class Resource extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public int $location,
			public string $name,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['location'], $j['name'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'location' => $this->location, 'name' => $this->name, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_Resource extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public array|null|Nil $labels = null,
			public int|null $location = null,
			public string|null $name = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['labels'] ?? null, $j['location'] ?? null, $j['name'] ?? null, $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'labels' => $this->labels, 'location' => $this->location, 'name' => $this->name, 'tags' => $this->tags ];
		}
	}

	class Stored_Resource extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public int $location,
			public string $name,
			public string $updated,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['location'], $j['name'], $j['updated'], $j['deleted'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'location' => $this->location, 'name' => $this->name, 'updated' => $this->updated, 'deleted' => $this->deleted, 'labels' => $this->labels, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class ResourceMap extends Onslip360Object {
		/**
		 * @param ResourceMapItem[] $resourceMapItems
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public int $height,
			public int $location,
			public string $name,
			public array $resourceMapItems,
			public int $width,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['height'], $j['location'], $j['name'], ResourceMapItem::a($j['resource-map-items']), $j['width'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'height' => $this->height, 'location' => $this->location, 'name' => $this->name, 'resource-map-items' => $this->resourceMapItems, 'width' => $this->width, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_ResourceMap extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param Partial_ResourceMapItem[]|null $resourceMapItems
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public int|null $height = null,
			public array|null|Nil $labels = null,
			public int|null $location = null,
			public string|null $name = null,
			public array|null $resourceMapItems = null,
			public array|null|Nil $tags = null,
			public int|null $width = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['height'] ?? null, $j['labels'] ?? null, $j['location'] ?? null, $j['name'] ?? null, Partial_ResourceMapItem::a($j['resource-map-items'] ?? null), $j['tags'] ?? null, $j['width'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'height' => $this->height, 'labels' => $this->labels, 'location' => $this->location, 'name' => $this->name, 'resource-map-items' => $this->resourceMapItems, 'tags' => $this->tags, 'width' => $this->width ];
		}
	}

	class Stored_ResourceMap extends Onslip360Object {
		/**
		 * @param ResourceMapItem[] $resourceMapItems
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $height,
			public int $id,
			public int $location,
			public string $name,
			public array $resourceMapItems,
			public string $updated,
			public int $width,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['height'], $j['id'], $j['location'], $j['name'], ResourceMapItem::a($j['resource-map-items']), $j['updated'], $j['width'], $j['deleted'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'height' => $this->height, 'id' => $this->id, 'location' => $this->location, 'name' => $this->name, 'resource-map-items' => $this->resourceMapItems, 'updated' => $this->updated, 'width' => $this->width, 'deleted' => $this->deleted, 'labels' => $this->labels, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class ResourceMapItem extends Onslip360Object {
		function __construct(
			public int $height,
			public ResourceMapItem\Shape $shape,
			public ResourceMapItem\Type $type,
			public int $width,
			public int $x,
			public int $y,
			public int|null $resource = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['height'], static::e(ResourceMapItem\Shape::from(...), $j['shape']), static::e(ResourceMapItem\Type::from(...), $j['type']), $j['width'], $j['x'], $j['y'], $j['resource'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'height' => $this->height, 'shape' => $this->shape, 'type' => $this->type, 'width' => $this->width, 'x' => $this->x, 'y' => $this->y, 'resource' => $this->resource ];
		}
	}

	class Partial_ResourceMapItem extends Onslip360Object {
		function __construct(
			public int|null $height = null,
			public int|null|Nil $resource = null,
			public ResourceMapItem\Shape|null $shape = null,
			public ResourceMapItem\Type|null $type = null,
			public int|null $width = null,
			public int|null $x = null,
			public int|null $y = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['height'] ?? null, $j['resource'] ?? null, static::e(ResourceMapItem\Shape::from(...), $j['shape'] ?? null), static::e(ResourceMapItem\Type::from(...), $j['type'] ?? null), $j['width'] ?? null, $j['x'] ?? null, $j['y'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'height' => $this->height, 'resource' => $this->resource, 'shape' => $this->shape, 'type' => $this->type, 'width' => $this->width, 'x' => $this->x, 'y' => $this->y ];
		}
	}

	class RestrictedVersionWarningParams extends Onslip360Object {
		function __construct(
			public int $level,
			public int $transactionLevel,
			public int $transactions,
			public float $turnover,
			public int $turnoverLevel,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['level'], $j['transaction-level'], $j['transactions'], $j['turnover'], $j['turnover-level'] ];
		}

		protected function _toJson(): array {
			return [ 'level' => $this->level, 'transaction-level' => $this->transactionLevel, 'transactions' => $this->transactions, 'turnover' => $this->turnover, 'turnover-level' => $this->turnoverLevel ];
		}
	}

	class Partial_RestrictedVersionWarningParams extends Onslip360Object {
		function __construct(
			public int|null $level = null,
			public int|null $transactionLevel = null,
			public int|null $transactions = null,
			public float|null $turnover = null,
			public int|null $turnoverLevel = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['level'] ?? null, $j['transaction-level'] ?? null, $j['transactions'] ?? null, $j['turnover'] ?? null, $j['turnover-level'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'level' => $this->level, 'transaction-level' => $this->transactionLevel, 'transactions' => $this->transactions, 'turnover' => $this->turnover, 'turnover-level' => $this->turnoverLevel ];
		}
	}

	class Role extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param Permission[]|null $permissions
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $name,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $permissions = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, static::e(Permission::from(...), $j['permissions'] ?? null), $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'permissions' => $this->permissions, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_Role extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param Permission[]|null|Nil $permissions
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public array|null|Nil $permissions = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, static::e(Permission::from(...), $j['permissions'] ?? null), $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'labels' => $this->labels, 'name' => $this->name, 'permissions' => $this->permissions, 'tags' => $this->tags ];
		}
	}

	class Stored_Role extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param Permission[]|null $permissions
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $name,
			public string $updated,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $permissions = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['name'], $j['updated'], $j['deleted'] ?? null, $j['labels'] ?? null, static::e(Permission::from(...), $j['permissions'] ?? null), $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'updated' => $this->updated, 'deleted' => $this->deleted, 'labels' => $this->labels, 'permissions' => $this->permissions, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class SalesReportActionParams extends Onslip360Object {
		/**
		 * @param int[]|null $clients
		 * @param int[]|null $locations
		*/
		function __construct(
			public array|null $clients = null,
			public bool|null $includeCredit = null,
			public array|null $locations = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['clients'] ?? null, $j['include-credit'] ?? null, $j['locations'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'clients' => $this->clients, 'include-credit' => $this->includeCredit, 'locations' => $this->locations ];
		}
	}

	class Partial_SalesReportActionParams extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $clients
		 * @param int[]|null|Nil $locations
		*/
		function __construct(
			public array|null|Nil $clients = null,
			public bool|null|Nil $includeCredit = null,
			public array|null|Nil $locations = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['clients'] ?? null, $j['include-credit'] ?? null, $j['locations'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'clients' => $this->clients, 'include-credit' => $this->includeCredit, 'locations' => $this->locations ];
		}
	}

	class SendEmailAction extends Onslip360Object {
		function __construct(
			public SendEmailRequest $emailRequest,
		) {}

		protected static function _fromJson(array $j): array {
			return [ SendEmailRequest::o($j['email-request']) ];
		}

		protected function _toJson(): array {
			return [ 'email-request' => $this->emailRequest ];
		}
	}

	class Partial_SendEmailAction extends Onslip360Object {
		function __construct(
			public Partial_SendEmailRequest|null $emailRequest = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_SendEmailRequest::o($j['email-request'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'email-request' => $this->emailRequest ];
		}
	}

	class SendEmailRequest extends Onslip360Object {
		function __construct(
			public SendEmailRequest\Template $template,
			public CustomerFeedbackParams|null $customerFeedback = null,
			public InitWeiqIntegrationParams|null $initWeiqIntegration = null,
			public string|null $locale = null,
			public NewAccountLoginDetailsParams|null $newAccountLoginDetails = null,
			public PasswordResetChallengeParams|null $passwordResetChallenge = null,
			public ReportCoverParams|null $reportCover = null,
			public RestrictedVersionWarningParams|null $restrictedVersionWarning = null,
			public WelcomeEmailParams|null $welcomeEmail = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(SendEmailRequest\Template::from(...), $j['template']), CustomerFeedbackParams::o($j['customer-feedback'] ?? null), InitWeiqIntegrationParams::o($j['init-weiq-integration'] ?? null), $j['locale'] ?? null, NewAccountLoginDetailsParams::o($j['new-account-login-details'] ?? null), PasswordResetChallengeParams::o($j['password-reset-challenge'] ?? null), ReportCoverParams::o($j['report-cover'] ?? null), RestrictedVersionWarningParams::o($j['restricted-version-warning'] ?? null), WelcomeEmailParams::o($j['welcome-email'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'template' => $this->template, 'customer-feedback' => $this->customerFeedback, 'init-weiq-integration' => $this->initWeiqIntegration, 'locale' => $this->locale, 'new-account-login-details' => $this->newAccountLoginDetails, 'password-reset-challenge' => $this->passwordResetChallenge, 'report-cover' => $this->reportCover, 'restricted-version-warning' => $this->restrictedVersionWarning, 'welcome-email' => $this->welcomeEmail ];
		}
	}

	class Partial_SendEmailRequest extends Onslip360Object {
		function __construct(
			public Partial_CustomerFeedbackParams|null|Nil $customerFeedback = null,
			public Partial_InitWeiqIntegrationParams|null|Nil $initWeiqIntegration = null,
			public string|null|Nil $locale = null,
			public Partial_NewAccountLoginDetailsParams|null|Nil $newAccountLoginDetails = null,
			public Partial_PasswordResetChallengeParams|null|Nil $passwordResetChallenge = null,
			public Partial_ReportCoverParams|null|Nil $reportCover = null,
			public Partial_RestrictedVersionWarningParams|null|Nil $restrictedVersionWarning = null,
			public SendEmailRequest\Template|null $template = null,
			public Partial_WelcomeEmailParams|null|Nil $welcomeEmail = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_CustomerFeedbackParams::o($j['customer-feedback'] ?? null), Partial_InitWeiqIntegrationParams::o($j['init-weiq-integration'] ?? null), $j['locale'] ?? null, Partial_NewAccountLoginDetailsParams::o($j['new-account-login-details'] ?? null), Partial_PasswordResetChallengeParams::o($j['password-reset-challenge'] ?? null), Partial_ReportCoverParams::o($j['report-cover'] ?? null), Partial_RestrictedVersionWarningParams::o($j['restricted-version-warning'] ?? null), static::e(SendEmailRequest\Template::from(...), $j['template'] ?? null), Partial_WelcomeEmailParams::o($j['welcome-email'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'customer-feedback' => $this->customerFeedback, 'init-weiq-integration' => $this->initWeiqIntegration, 'locale' => $this->locale, 'new-account-login-details' => $this->newAccountLoginDetails, 'password-reset-challenge' => $this->passwordResetChallenge, 'report-cover' => $this->reportCover, 'restricted-version-warning' => $this->restrictedVersionWarning, 'template' => $this->template, 'welcome-email' => $this->welcomeEmail ];
		}
	}

	class Sergel extends Onslip360Object {
		function __construct(
			public string $partnerId,
			public string $url,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['partner-id'], $j['url'] ];
		}

		protected function _toJson(): array {
			return [ 'partner-id' => $this->partnerId, 'url' => $this->url ];
		}
	}

	class Partial_Sergel extends Onslip360Object {
		function __construct(
			public string|null $partnerId = null,
			public string|null $url = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['partner-id'] ?? null, $j['url'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'partner-id' => $this->partnerId, 'url' => $this->url ];
		}
	}

	class ServerError extends Onslip360Object {
		function __construct(
			public string $message,
			public string|null $code = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['message'], $j['code'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'message' => $this->message, 'code' => $this->code ];
		}
	}

	class Partial_ServerError extends Onslip360Object {
		function __construct(
			public string|null|Nil $code = null,
			public string|null $message = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['code'] ?? null, $j['message'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'code' => $this->code, 'message' => $this->message ];
		}
	}

	class ServiceEndpoint extends Onslip360Object {
		function __construct(
			public string $uri,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['uri'] ];
		}

		protected function _toJson(): array {
			return [ 'uri' => $this->uri ];
		}
	}

	class Partial_ServiceEndpoint extends Onslip360Object {
		function __construct(
			public string|null $uri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'uri' => $this->uri ];
		}
	}

	class Shift extends Onslip360Object {
		/**
		 * @param ShiftHistory[] $history
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public array $history,
			public string $identityNumber,
			public string $name,
			public string $startDate,
			public Shift\Status $status,
			public int $user,
			public string|null $created = null,
			public string|null $deleted = null,
			public string|null $endDate = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ ShiftHistory::a($j['history']), $j['identity-number'], $j['name'], $j['start-date'], static::e(Shift\Status::from(...), $j['status']), $j['user'], $j['created'] ?? null, $j['deleted'] ?? null, $j['end-date'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'history' => $this->history, 'identity-number' => $this->identityNumber, 'name' => $this->name, 'start-date' => $this->startDate, 'status' => $this->status, 'user' => $this->user, 'created' => $this->created, 'deleted' => $this->deleted, 'end-date' => $this->endDate, 'id' => $this->id, 'labels' => $this->labels, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_Shift extends Onslip360Object {
		/**
		 * @param Partial_ShiftHistory[]|null $history
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public string|null|Nil $endDate = null,
			public array|null $history = null,
			public string|null $identityNumber = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public string|null $startDate = null,
			public Shift\Status|null $status = null,
			public array|null|Nil $tags = null,
			public int|null $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['end-date'] ?? null, Partial_ShiftHistory::a($j['history'] ?? null), $j['identity-number'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['start-date'] ?? null, static::e(Shift\Status::from(...), $j['status'] ?? null), $j['tags'] ?? null, $j['user'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'end-date' => $this->endDate, 'history' => $this->history, 'identity-number' => $this->identityNumber, 'labels' => $this->labels, 'name' => $this->name, 'start-date' => $this->startDate, 'status' => $this->status, 'tags' => $this->tags, 'user' => $this->user ];
		}
	}

	class Stored_Shift extends Onslip360Object {
		/**
		 * @param ShiftHistory[] $history
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public array $history,
			public int $id,
			public string $identityNumber,
			public string $name,
			public string $startDate,
			public Shift\Status $status,
			public string $updated,
			public int $user,
			public string|null $deleted = null,
			public string|null $endDate = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], ShiftHistory::a($j['history']), $j['id'], $j['identity-number'], $j['name'], $j['start-date'], static::e(Shift\Status::from(...), $j['status']), $j['updated'], $j['user'], $j['deleted'] ?? null, $j['end-date'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'history' => $this->history, 'id' => $this->id, 'identity-number' => $this->identityNumber, 'name' => $this->name, 'start-date' => $this->startDate, 'status' => $this->status, 'updated' => $this->updated, 'user' => $this->user, 'deleted' => $this->deleted, 'end-date' => $this->endDate, 'labels' => $this->labels, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class ShiftHistory extends Onslip360Object {
		function __construct(
			public string $startDate,
			public string $updated,
			public int $updatedBy,
			public string|null $endDate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['start-date'], $j['updated'], $j['updated-by'], $j['end-date'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'start-date' => $this->startDate, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'end-date' => $this->endDate ];
		}
	}

	class Partial_ShiftHistory extends Onslip360Object {
		function __construct(
			public string|null|Nil $endDate = null,
			public string|null $startDate = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['end-date'] ?? null, $j['start-date'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'end-date' => $this->endDate, 'start-date' => $this->startDate, 'updated' => $this->updated, 'updated-by' => $this->updatedBy ];
		}
	}

	class ShiftHistoryExport extends Onslip360Object {
		function __construct(
			public string $endDate,
			public string $startDate,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['end-date'], $j['start-date'] ];
		}

		protected function _toJson(): array {
			return [ 'end-date' => $this->endDate, 'start-date' => $this->startDate ];
		}
	}

	class Partial_ShiftHistoryExport extends Onslip360Object {
		function __construct(
			public string|null $endDate = null,
			public string|null $startDate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['end-date'] ?? null, $j['start-date'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'end-date' => $this->endDate, 'start-date' => $this->startDate ];
		}
	}

	class ShiftsReportActionParams extends Onslip360Object {
		/**
		 * @param int[]|null $locations
		 * @param int[]|null $users
		*/
		function __construct(
			public array|null $locations = null,
			public array|null $users = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['locations'] ?? null, $j['users'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'locations' => $this->locations, 'users' => $this->users ];
		}
	}

	class Partial_ShiftsReportActionParams extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $locations
		 * @param int[]|null|Nil $users
		*/
		function __construct(
			public array|null|Nil $locations = null,
			public array|null|Nil $users = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['locations'] ?? null, $j['users'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'locations' => $this->locations, 'users' => $this->users ];
		}
	}

	class ShortURI extends Onslip360Object {
		/**
		 * @param string[]|null $tags
		*/
		function __construct(
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public string|null $tag = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public string|null $uri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['tag'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'tag' => $this->tag, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'uri' => $this->uri ];
		}
	}

	class Partial_ShortURI extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public string|null|Nil $tag = null,
			public array|null|Nil $tags = null,
			public string|null|Nil $uri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['tag'] ?? null, $j['tags'] ?? null, $j['uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'tag' => $this->tag, 'tags' => $this->tags, 'uri' => $this->uri ];
		}
	}

	class Stored_ShortURI extends Onslip360Object {
		/**
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $updated,
			public string|null $deleted = null,
			public string|null $tag = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public string|null $uri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['updated'], $j['deleted'] ?? null, $j['tag'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'updated' => $this->updated, 'deleted' => $this->deleted, 'tag' => $this->tag, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'uri' => $this->uri ];
		}
	}

	class SlippConfig extends Onslip360Object {
		function __construct(
			public string $wsUri,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['ws-uri'] ];
		}

		protected function _toJson(): array {
			return [ 'ws-uri' => $this->wsUri ];
		}
	}

	class Partial_SlippConfig extends Onslip360Object {
		function __construct(
			public string|null $wsUri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['ws-uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'ws-uri' => $this->wsUri ];
		}
	}

	class StockBalance extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public float|null $balance = null,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public int|null $location = null,
			public float|null $quantity = null,
			public float|null $remainingPercentage = null,
			public float|null $remainingQuantity = null,
			public float|null $required = null,
			public float|null $reserved = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['balance'] ?? null, $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['location'] ?? null, $j['quantity'] ?? null, $j['remaining-percentage'] ?? null, $j['remaining-quantity'] ?? null, $j['required'] ?? null, $j['reserved'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'balance' => $this->balance, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'location' => $this->location, 'quantity' => $this->quantity, 'remaining-percentage' => $this->remainingPercentage, 'remaining-quantity' => $this->remainingQuantity, 'required' => $this->required, 'reserved' => $this->reserved, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_StockBalance extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public array|null|Nil $labels = null,
			public float|null|Nil $quantity = null,
			public float|null|Nil $required = null,
			public float|null|Nil $reserved = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['labels'] ?? null, $j['quantity'] ?? null, $j['required'] ?? null, $j['reserved'] ?? null, $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'labels' => $this->labels, 'quantity' => $this->quantity, 'required' => $this->required, 'reserved' => $this->reserved, 'tags' => $this->tags ];
		}
	}

	class Stored_StockBalance extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public int $location,
			public string $updated,
			public float|null $balance = null,
			public string|null $deleted = null,
			public array|null $labels = null,
			public float|null $quantity = null,
			public float|null $remainingPercentage = null,
			public float|null $remainingQuantity = null,
			public float|null $required = null,
			public float|null $reserved = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['location'], $j['updated'], $j['balance'] ?? null, $j['deleted'] ?? null, $j['labels'] ?? null, $j['quantity'] ?? null, $j['remaining-percentage'] ?? null, $j['remaining-quantity'] ?? null, $j['required'] ?? null, $j['reserved'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'location' => $this->location, 'updated' => $this->updated, 'balance' => $this->balance, 'deleted' => $this->deleted, 'labels' => $this->labels, 'quantity' => $this->quantity, 'remaining-percentage' => $this->remainingPercentage, 'remaining-quantity' => $this->remainingQuantity, 'required' => $this->required, 'reserved' => $this->reserved, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class StockBalanceTransaction extends Onslip360Object {
		function __construct(
			public bool $forced,
			public float|null $quantity = null,
			public float|null $reserved = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['forced'], $j['quantity'] ?? null, $j['reserved'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'forced' => $this->forced, 'quantity' => $this->quantity, 'reserved' => $this->reserved ];
		}
	}

	class Partial_StockBalanceTransaction extends Onslip360Object {
		function __construct(
			public bool|null $forced = null,
			public float|null|Nil $quantity = null,
			public float|null|Nil $reserved = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['forced'] ?? null, $j['quantity'] ?? null, $j['reserved'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'forced' => $this->forced, 'quantity' => $this->quantity, 'reserved' => $this->reserved ];
		}
	}

	class StockBalancesReportActionParams extends Onslip360Object {
		/**
		 * @param int[]|null $locations
		*/
		function __construct(
			public array|null $locations = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['locations'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'locations' => $this->locations ];
		}
	}

	class Partial_StockBalancesReportActionParams extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $locations
		*/
		function __construct(
			public array|null|Nil $locations = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['locations'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'locations' => $this->locations ];
		}
	}

	class Summary extends Onslip360Object {
		function __construct(
			public float $amount,
			public int $count,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'], $j['count'] ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'count' => $this->count ];
		}
	}

	class Partial_Summary extends Onslip360Object {
		function __construct(
			public float|null $amount = null,
			public int|null $count = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['count'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'count' => $this->count ];
		}
	}

	class SwishConfig extends Onslip360Object {
		function __construct(
			public string $cpcUri,
			public string $qrgUri,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['cpc-uri'], $j['qrg-uri'] ];
		}

		protected function _toJson(): array {
			return [ 'cpc-uri' => $this->cpcUri, 'qrg-uri' => $this->qrgUri ];
		}
	}

	class Partial_SwishConfig extends Onslip360Object {
		function __construct(
			public string|null $cpcUri = null,
			public string|null $qrgUri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['cpc-uri'] ?? null, $j['qrg-uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'cpc-uri' => $this->cpcUri, 'qrg-uri' => $this->qrgUri ];
		}
	}

	class SwishError extends Onslip360Object {
		function __construct(
			public string|null $errorCode = null,
			public string|null $errorMessage = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['error-code'] ?? null, $j['error-message'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'error-code' => $this->errorCode, 'error-message' => $this->errorMessage ];
		}
	}

	class Partial_SwishError extends Onslip360Object {
		function __construct(
			public string|null|Nil $errorCode = null,
			public string|null|Nil $errorMessage = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['error-code'] ?? null, $j['error-message'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'error-code' => $this->errorCode, 'error-message' => $this->errorMessage ];
		}
	}

	class SwishPingRequest extends Onslip360Object {
		function __construct(
			public int $paymentMethod,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['payment-method'] ];
		}

		protected function _toJson(): array {
			return [ 'payment-method' => $this->paymentMethod ];
		}
	}

	class Partial_SwishPingRequest extends Onslip360Object {
		function __construct(
			public int|null $paymentMethod = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['payment-method'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'payment-method' => $this->paymentMethod ];
		}
	}

	class SwishQRRequest extends Onslip360Object {
		function __construct(
			public string $format,
			public int $size,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['format'], $j['size'] ];
		}

		protected function _toJson(): array {
			return [ 'format' => $this->format, 'size' => $this->size ];
		}
	}

	class Partial_SwishQRRequest extends Onslip360Object {
		function __construct(
			public string|null $format = null,
			public int|null $size = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['format'] ?? null, $j['size'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'format' => $this->format, 'size' => $this->size ];
		}
	}

	class SwishQRResponse extends Onslip360Object {
		function __construct(
			public string $qr,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['qr'] ];
		}

		protected function _toJson(): array {
			return [ 'qr' => $this->qr ];
		}
	}

	class Partial_SwishQRResponse extends Onslip360Object {
		function __construct(
			public string|null $qr = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['qr'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'qr' => $this->qr ];
		}
	}

	class SwishRefundRequest extends Onslip360Object {
		function __construct(
			public float $amount,
			public string $message,
			public string $payerPaymentReference,
			public int $paymentMethod,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'], $j['message'], $j['payer-payment-reference'], $j['payment-method'] ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'message' => $this->message, 'payer-payment-reference' => $this->payerPaymentReference, 'payment-method' => $this->paymentMethod ];
		}
	}

	class Partial_SwishRefundRequest extends Onslip360Object {
		function __construct(
			public float|null $amount = null,
			public string|null $message = null,
			public string|null $payerPaymentReference = null,
			public int|null $paymentMethod = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['message'] ?? null, $j['payer-payment-reference'] ?? null, $j['payment-method'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'message' => $this->message, 'payer-payment-reference' => $this->payerPaymentReference, 'payment-method' => $this->paymentMethod ];
		}
	}

	class SwishTransaction extends Onslip360Object {
		/**
		 * @param SwishError[]|null $errors
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public float $amount,
			public string $currency,
			public int $paymentMethod,
			public string|null $created = null,
			public string|null $createdDate = null,
			public string|null $customer = null,
			public string|null $deleted = null,
			public array|null $errors = null,
			public int|null $id = null,
			public array|null $labels = null,
			public string|null $merchant = null,
			public string|null $message = null,
			public string|null $originalPaymentReference = null,
			public string|null $paidDate = null,
			public string|null $payerPaymentReference = null,
			public string|null $paymentReference = null,
			public string|null $paymentReferenceUrl = null,
			public string|null $paymentRequestToken = null,
			public SwishTransaction\Status|null $status = null,
			public array|null $tags = null,
			public SwishTransaction\Type|null $type = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'], $j['currency'], $j['payment-method'], $j['created'] ?? null, $j['created-date'] ?? null, $j['customer'] ?? null, $j['deleted'] ?? null, SwishError::a($j['errors'] ?? null), $j['id'] ?? null, $j['labels'] ?? null, $j['merchant'] ?? null, $j['message'] ?? null, $j['original-payment-reference'] ?? null, $j['paid-date'] ?? null, $j['payer-payment-reference'] ?? null, $j['payment-reference'] ?? null, $j['payment-reference-url'] ?? null, $j['payment-request-token'] ?? null, static::e(SwishTransaction\Status::from(...), $j['status'] ?? null), $j['tags'] ?? null, static::e(SwishTransaction\Type::from(...), $j['type'] ?? null), $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'currency' => $this->currency, 'payment-method' => $this->paymentMethod, 'created' => $this->created, 'created-date' => $this->createdDate, 'customer' => $this->customer, 'deleted' => $this->deleted, 'errors' => $this->errors, 'id' => $this->id, 'labels' => $this->labels, 'merchant' => $this->merchant, 'message' => $this->message, 'original-payment-reference' => $this->originalPaymentReference, 'paid-date' => $this->paidDate, 'payer-payment-reference' => $this->payerPaymentReference, 'payment-reference' => $this->paymentReference, 'payment-reference-url' => $this->paymentReferenceUrl, 'payment-request-token' => $this->paymentRequestToken, 'status' => $this->status, 'tags' => $this->tags, 'type' => $this->type, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_SwishTransaction extends Onslip360Object {
		/**
		 * @param Partial_SwishError[]|null|Nil $errors
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public float|null $amount = null,
			public string|null|Nil $createdDate = null,
			public string|null $currency = null,
			public string|null|Nil $customer = null,
			public string|null|Nil $deleted = null,
			public array|null|Nil $errors = null,
			public array|null|Nil $labels = null,
			public string|null|Nil $merchant = null,
			public string|null|Nil $message = null,
			public string|null|Nil $originalPaymentReference = null,
			public string|null|Nil $paidDate = null,
			public string|null|Nil $payerPaymentReference = null,
			public int|null $paymentMethod = null,
			public string|null|Nil $paymentReference = null,
			public string|null|Nil $paymentReferenceUrl = null,
			public string|null|Nil $paymentRequestToken = null,
			public SwishTransaction\Status|null|Nil $status = null,
			public array|null|Nil $tags = null,
			public SwishTransaction\Type|null|Nil $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['created-date'] ?? null, $j['currency'] ?? null, $j['customer'] ?? null, $j['deleted'] ?? null, Partial_SwishError::a($j['errors'] ?? null), $j['labels'] ?? null, $j['merchant'] ?? null, $j['message'] ?? null, $j['original-payment-reference'] ?? null, $j['paid-date'] ?? null, $j['payer-payment-reference'] ?? null, $j['payment-method'] ?? null, $j['payment-reference'] ?? null, $j['payment-reference-url'] ?? null, $j['payment-request-token'] ?? null, static::e(SwishTransaction\Status::from(...), $j['status'] ?? null), $j['tags'] ?? null, static::e(SwishTransaction\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'created-date' => $this->createdDate, 'currency' => $this->currency, 'customer' => $this->customer, 'deleted' => $this->deleted, 'errors' => $this->errors, 'labels' => $this->labels, 'merchant' => $this->merchant, 'message' => $this->message, 'original-payment-reference' => $this->originalPaymentReference, 'paid-date' => $this->paidDate, 'payer-payment-reference' => $this->payerPaymentReference, 'payment-method' => $this->paymentMethod, 'payment-reference' => $this->paymentReference, 'payment-reference-url' => $this->paymentReferenceUrl, 'payment-request-token' => $this->paymentRequestToken, 'status' => $this->status, 'tags' => $this->tags, 'type' => $this->type ];
		}
	}

	class Stored_SwishTransaction extends Onslip360Object {
		/**
		 * @param SwishError[]|null $errors
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public float $amount,
			public string $created,
			public string $currency,
			public int $id,
			public int $paymentMethod,
			public string $updated,
			public string|null $createdDate = null,
			public string|null $customer = null,
			public string|null $deleted = null,
			public array|null $errors = null,
			public array|null $labels = null,
			public string|null $merchant = null,
			public string|null $message = null,
			public string|null $originalPaymentReference = null,
			public string|null $paidDate = null,
			public string|null $payerPaymentReference = null,
			public string|null $paymentReference = null,
			public string|null $paymentReferenceUrl = null,
			public string|null $paymentRequestToken = null,
			public SwishTransaction\Status|null $status = null,
			public array|null $tags = null,
			public SwishTransaction\Type|null $type = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'], $j['created'], $j['currency'], $j['id'], $j['payment-method'], $j['updated'], $j['created-date'] ?? null, $j['customer'] ?? null, $j['deleted'] ?? null, SwishError::a($j['errors'] ?? null), $j['labels'] ?? null, $j['merchant'] ?? null, $j['message'] ?? null, $j['original-payment-reference'] ?? null, $j['paid-date'] ?? null, $j['payer-payment-reference'] ?? null, $j['payment-reference'] ?? null, $j['payment-reference-url'] ?? null, $j['payment-request-token'] ?? null, static::e(SwishTransaction\Status::from(...), $j['status'] ?? null), $j['tags'] ?? null, static::e(SwishTransaction\Type::from(...), $j['type'] ?? null), $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'created' => $this->created, 'currency' => $this->currency, 'id' => $this->id, 'payment-method' => $this->paymentMethod, 'updated' => $this->updated, 'created-date' => $this->createdDate, 'customer' => $this->customer, 'deleted' => $this->deleted, 'errors' => $this->errors, 'labels' => $this->labels, 'merchant' => $this->merchant, 'message' => $this->message, 'original-payment-reference' => $this->originalPaymentReference, 'paid-date' => $this->paidDate, 'payer-payment-reference' => $this->payerPaymentReference, 'payment-reference' => $this->paymentReference, 'payment-reference-url' => $this->paymentReferenceUrl, 'payment-request-token' => $this->paymentRequestToken, 'status' => $this->status, 'tags' => $this->tags, 'type' => $this->type, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class SwishTransactionMetadata extends Onslip360Object {
		function __construct(
			public float $amount,
			public string $currencyCode,
			public SwishTransaction\Status $status,
			public int $swishTransaction,
			public string $transactionDate,
			public SwishTransaction\Type $type,
			public string|null $customer = null,
			public string|null $transactionId = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'], $j['currency-code'], static::e(SwishTransaction\Status::from(...), $j['status']), $j['swish-transaction'], $j['transaction-date'], static::e(SwishTransaction\Type::from(...), $j['type']), $j['customer'] ?? null, $j['transaction-id'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'currency-code' => $this->currencyCode, 'status' => $this->status, 'swish-transaction' => $this->swishTransaction, 'transaction-date' => $this->transactionDate, 'type' => $this->type, 'customer' => $this->customer, 'transaction-id' => $this->transactionId ];
		}
	}

	class Partial_SwishTransactionMetadata extends Onslip360Object {
		function __construct(
			public float|null $amount = null,
			public string|null $currencyCode = null,
			public string|null|Nil $customer = null,
			public SwishTransaction\Status|null $status = null,
			public int|null $swishTransaction = null,
			public string|null $transactionDate = null,
			public string|null|Nil $transactionId = null,
			public SwishTransaction\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['currency-code'] ?? null, $j['customer'] ?? null, static::e(SwishTransaction\Status::from(...), $j['status'] ?? null), $j['swish-transaction'] ?? null, $j['transaction-date'] ?? null, $j['transaction-id'] ?? null, static::e(SwishTransaction\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'currency-code' => $this->currencyCode, 'customer' => $this->customer, 'status' => $this->status, 'swish-transaction' => $this->swishTransaction, 'transaction-date' => $this->transactionDate, 'transaction-id' => $this->transactionId, 'type' => $this->type ];
		}
	}

	class SystemConfig extends Onslip360Object {
		/**
		 * @param string[]|null $tags
		*/
		function __construct(
			public string|null $backofficeUri = null,
			public string|null $controlUnitNotificationRecipient = null,
			public string|null $created = null,
			public string|null $customerFeedbackRecipient = null,
			public string|null $defaultClientVersion = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public string|null $receiptUri = null,
			public Sergel|null $sergel = null,
			public string|null $shortUri = null,
			public SlippConfig|null $slipp = null,
			public SwishConfig|null $swish = null,
			public array|null $tags = null,
			public string|null $unsubscribeKey = null,
			public string|null $unsubscribeUri = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public VismaConfig|null $visma = null,
			public VivaWalletConfig|null $vivaWallet = null,
			public WEIQ|null $weiq = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['backoffice-uri'] ?? null, $j['control-unit-notification-recipient'] ?? null, $j['created'] ?? null, $j['customer-feedback-recipient'] ?? null, $j['default-client-version'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['receipt-uri'] ?? null, Sergel::o($j['sergel'] ?? null), $j['short-uri'] ?? null, SlippConfig::o($j['slipp'] ?? null), SwishConfig::o($j['swish'] ?? null), $j['tags'] ?? null, $j['unsubscribe-key'] ?? null, $j['unsubscribe-uri'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, VismaConfig::o($j['visma'] ?? null), VivaWalletConfig::o($j['viva-wallet'] ?? null), WEIQ::o($j['weiq'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'backoffice-uri' => $this->backofficeUri, 'control-unit-notification-recipient' => $this->controlUnitNotificationRecipient, 'created' => $this->created, 'customer-feedback-recipient' => $this->customerFeedbackRecipient, 'default-client-version' => $this->defaultClientVersion, 'deleted' => $this->deleted, 'id' => $this->id, 'receipt-uri' => $this->receiptUri, 'sergel' => $this->sergel, 'short-uri' => $this->shortUri, 'slipp' => $this->slipp, 'swish' => $this->swish, 'tags' => $this->tags, 'unsubscribe-key' => $this->unsubscribeKey, 'unsubscribe-uri' => $this->unsubscribeUri, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'visma' => $this->visma, 'viva-wallet' => $this->vivaWallet, 'weiq' => $this->weiq ];
		}
	}

	class Partial_SystemConfig extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $backofficeUri = null,
			public string|null|Nil $controlUnitNotificationRecipient = null,
			public string|null|Nil $customerFeedbackRecipient = null,
			public string|null|Nil $defaultClientVersion = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $receiptUri = null,
			public Partial_Sergel|null|Nil $sergel = null,
			public string|null|Nil $shortUri = null,
			public Partial_SlippConfig|null|Nil $slipp = null,
			public Partial_SwishConfig|null|Nil $swish = null,
			public array|null|Nil $tags = null,
			public string|null|Nil $unsubscribeKey = null,
			public string|null|Nil $unsubscribeUri = null,
			public Partial_VismaConfig|null|Nil $visma = null,
			public Partial_VivaWalletConfig|null|Nil $vivaWallet = null,
			public Partial_WEIQ|null|Nil $weiq = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['backoffice-uri'] ?? null, $j['control-unit-notification-recipient'] ?? null, $j['customer-feedback-recipient'] ?? null, $j['default-client-version'] ?? null, $j['deleted'] ?? null, $j['receipt-uri'] ?? null, Partial_Sergel::o($j['sergel'] ?? null), $j['short-uri'] ?? null, Partial_SlippConfig::o($j['slipp'] ?? null), Partial_SwishConfig::o($j['swish'] ?? null), $j['tags'] ?? null, $j['unsubscribe-key'] ?? null, $j['unsubscribe-uri'] ?? null, Partial_VismaConfig::o($j['visma'] ?? null), Partial_VivaWalletConfig::o($j['viva-wallet'] ?? null), Partial_WEIQ::o($j['weiq'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'backoffice-uri' => $this->backofficeUri, 'control-unit-notification-recipient' => $this->controlUnitNotificationRecipient, 'customer-feedback-recipient' => $this->customerFeedbackRecipient, 'default-client-version' => $this->defaultClientVersion, 'deleted' => $this->deleted, 'receipt-uri' => $this->receiptUri, 'sergel' => $this->sergel, 'short-uri' => $this->shortUri, 'slipp' => $this->slipp, 'swish' => $this->swish, 'tags' => $this->tags, 'unsubscribe-key' => $this->unsubscribeKey, 'unsubscribe-uri' => $this->unsubscribeUri, 'visma' => $this->visma, 'viva-wallet' => $this->vivaWallet, 'weiq' => $this->weiq ];
		}
	}

	class Stored_SystemConfig extends Onslip360Object {
		/**
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $updated,
			public string|null $backofficeUri = null,
			public string|null $controlUnitNotificationRecipient = null,
			public string|null $customerFeedbackRecipient = null,
			public string|null $defaultClientVersion = null,
			public string|null $deleted = null,
			public string|null $receiptUri = null,
			public Sergel|null $sergel = null,
			public string|null $shortUri = null,
			public SlippConfig|null $slipp = null,
			public SwishConfig|null $swish = null,
			public array|null $tags = null,
			public string|null $unsubscribeKey = null,
			public string|null $unsubscribeUri = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public VismaConfig|null $visma = null,
			public VivaWalletConfig|null $vivaWallet = null,
			public WEIQ|null $weiq = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['updated'], $j['backoffice-uri'] ?? null, $j['control-unit-notification-recipient'] ?? null, $j['customer-feedback-recipient'] ?? null, $j['default-client-version'] ?? null, $j['deleted'] ?? null, $j['receipt-uri'] ?? null, Sergel::o($j['sergel'] ?? null), $j['short-uri'] ?? null, SlippConfig::o($j['slipp'] ?? null), SwishConfig::o($j['swish'] ?? null), $j['tags'] ?? null, $j['unsubscribe-key'] ?? null, $j['unsubscribe-uri'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, VismaConfig::o($j['visma'] ?? null), VivaWalletConfig::o($j['viva-wallet'] ?? null), WEIQ::o($j['weiq'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'updated' => $this->updated, 'backoffice-uri' => $this->backofficeUri, 'control-unit-notification-recipient' => $this->controlUnitNotificationRecipient, 'customer-feedback-recipient' => $this->customerFeedbackRecipient, 'default-client-version' => $this->defaultClientVersion, 'deleted' => $this->deleted, 'receipt-uri' => $this->receiptUri, 'sergel' => $this->sergel, 'short-uri' => $this->shortUri, 'slipp' => $this->slipp, 'swish' => $this->swish, 'tags' => $this->tags, 'unsubscribe-key' => $this->unsubscribeKey, 'unsubscribe-uri' => $this->unsubscribeUri, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'visma' => $this->visma, 'viva-wallet' => $this->vivaWallet, 'weiq' => $this->weiq ];
		}
	}

	class SystemParams extends Onslip360Object {
		function __construct(
			public string $backofficeUri,
			public SlippConfig|null $slipp = null,
			public VivaWalletConfig|null $vivaWallet = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['backoffice-uri'], SlippConfig::o($j['slipp'] ?? null), VivaWalletConfig::o($j['viva-wallet'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'backoffice-uri' => $this->backofficeUri, 'slipp' => $this->slipp, 'viva-wallet' => $this->vivaWallet ];
		}
	}

	class Partial_SystemParams extends Onslip360Object {
		function __construct(
			public string|null $backofficeUri = null,
			public Partial_SlippConfig|null|Nil $slipp = null,
			public Partial_VivaWalletConfig|null|Nil $vivaWallet = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['backoffice-uri'] ?? null, Partial_SlippConfig::o($j['slipp'] ?? null), Partial_VivaWalletConfig::o($j['viva-wallet'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'backoffice-uri' => $this->backofficeUri, 'slipp' => $this->slipp, 'viva-wallet' => $this->vivaWallet ];
		}
	}

	class Tab extends Onslip360Object {
		/**
		 * @param Item[]|null $items
		 * @param int[]|null $labels
		 * @param Payment[]|null $originalPayments
		 * @param string[]|null $printouts
		 * @param string[]|null $tags
		*/
		function __construct(
			public int|null $client = null,
			public string|null $closed = null,
			public string|null $created = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public int|null $id = null,
			public array|null $items = null,
			public array|null $labels = null,
			public string|null $name = null,
			public int|null $order = null,
			public array|null $originalPayments = null,
			public array|null $printouts = null,
			public string|null $tabLockedBy = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['client'] ?? null, $j['closed'] ?? null, $j['created'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['id'] ?? null, Item::a($j['items'] ?? null), $j['labels'] ?? null, $j['name'] ?? null, $j['order'] ?? null, Payment::a($j['original-payments'] ?? null), $j['printouts'] ?? null, $j['tab-locked-by'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'client' => $this->client, 'closed' => $this->closed, 'created' => $this->created, 'deleted' => $this->deleted, 'description' => $this->description, 'id' => $this->id, 'items' => $this->items, 'labels' => $this->labels, 'name' => $this->name, 'order' => $this->order, 'original-payments' => $this->originalPayments, 'printouts' => $this->printouts, 'tab-locked-by' => $this->tabLockedBy, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_Tab extends Onslip360Object {
		/**
		 * @param Partial_Item[]|null|Nil $items
		 * @param int[]|null|Nil $labels
		 * @param Partial_Payment[]|null|Nil $originalPayments
		 * @param string[]|null|Nil $printouts
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public int|null|Nil $client = null,
			public string|null|Nil $closed = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $description = null,
			public array|null|Nil $items = null,
			public array|null|Nil $labels = null,
			public string|null|Nil $name = null,
			public int|null|Nil $order = null,
			public array|null|Nil $originalPayments = null,
			public array|null|Nil $printouts = null,
			public string|null|Nil $tabLockedBy = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['client'] ?? null, $j['closed'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, Partial_Item::a($j['items'] ?? null), $j['labels'] ?? null, $j['name'] ?? null, $j['order'] ?? null, Partial_Payment::a($j['original-payments'] ?? null), $j['printouts'] ?? null, $j['tab-locked-by'] ?? null, $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'client' => $this->client, 'closed' => $this->closed, 'deleted' => $this->deleted, 'description' => $this->description, 'items' => $this->items, 'labels' => $this->labels, 'name' => $this->name, 'order' => $this->order, 'original-payments' => $this->originalPayments, 'printouts' => $this->printouts, 'tab-locked-by' => $this->tabLockedBy, 'tags' => $this->tags ];
		}
	}

	class Stored_Tab extends Onslip360Object {
		/**
		 * @param Item[]|null $items
		 * @param int[]|null $labels
		 * @param Payment[]|null $originalPayments
		 * @param string[]|null $printouts
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $updated,
			public int|null $client = null,
			public string|null $closed = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public array|null $items = null,
			public array|null $labels = null,
			public string|null $name = null,
			public int|null $order = null,
			public array|null $originalPayments = null,
			public array|null $printouts = null,
			public string|null $tabLockedBy = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['updated'], $j['client'] ?? null, $j['closed'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, Item::a($j['items'] ?? null), $j['labels'] ?? null, $j['name'] ?? null, $j['order'] ?? null, Payment::a($j['original-payments'] ?? null), $j['printouts'] ?? null, $j['tab-locked-by'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'updated' => $this->updated, 'client' => $this->client, 'closed' => $this->closed, 'deleted' => $this->deleted, 'description' => $this->description, 'items' => $this->items, 'labels' => $this->labels, 'name' => $this->name, 'order' => $this->order, 'original-payments' => $this->originalPayments, 'printouts' => $this->printouts, 'tab-locked-by' => $this->tabLockedBy, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class TakeOutConfig extends Onslip360Object {
		/**
		 * @param string[]|null $orderTimes
		 * @param string[]|null $schedules
		*/
		function __construct(
			public int $buttonMap,
			public File|null $banner = null,
			public string|null $customerMessage = null,
			public string|null $lastOrder = null,
			public File|null $logo = null,
			public array|null $orderTimes = null,
			public array|null $schedules = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['button-map'], File::o($j['banner'] ?? null), $j['customer-message'] ?? null, $j['last-order'] ?? null, File::o($j['logo'] ?? null), $j['order-times'] ?? null, $j['schedules'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'button-map' => $this->buttonMap, 'banner' => $this->banner, 'customer-message' => $this->customerMessage, 'last-order' => $this->lastOrder, 'logo' => $this->logo, 'order-times' => $this->orderTimes, 'schedules' => $this->schedules ];
		}
	}

	class Partial_TakeOutConfig extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $orderTimes
		 * @param string[]|null|Nil $schedules
		*/
		function __construct(
			public Partial_File|null|Nil $banner = null,
			public int|null $buttonMap = null,
			public string|null|Nil $customerMessage = null,
			public string|null|Nil $lastOrder = null,
			public Partial_File|null|Nil $logo = null,
			public array|null|Nil $orderTimes = null,
			public array|null|Nil $schedules = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_File::o($j['banner'] ?? null), $j['button-map'] ?? null, $j['customer-message'] ?? null, $j['last-order'] ?? null, Partial_File::o($j['logo'] ?? null), $j['order-times'] ?? null, $j['schedules'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'banner' => $this->banner, 'button-map' => $this->buttonMap, 'customer-message' => $this->customerMessage, 'last-order' => $this->lastOrder, 'logo' => $this->logo, 'order-times' => $this->orderTimes, 'schedules' => $this->schedules ];
		}
	}

	class TakeOutStatus extends Onslip360Object {
		function __construct(
			public bool $active,
			public bool $configured,
			public bool $enabled,
			public bool $open,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['active'], $j['configured'], $j['enabled'], $j['open'] ];
		}

		protected function _toJson(): array {
			return [ 'active' => $this->active, 'configured' => $this->configured, 'enabled' => $this->enabled, 'open' => $this->open ];
		}
	}

	class Partial_TakeOutStatus extends Onslip360Object {
		function __construct(
			public bool|null $active = null,
			public bool|null $configured = null,
			public bool|null $enabled = null,
			public bool|null $open = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['active'] ?? null, $j['configured'] ?? null, $j['enabled'] ?? null, $j['open'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'active' => $this->active, 'configured' => $this->configured, 'enabled' => $this->enabled, 'open' => $this->open ];
		}
	}

	class TerminateCompanyRequest extends Onslip360Object {
		function __construct(
			public string $companyAlias,
			public string $hmac,
			public string $keyId,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['company-alias'], $j['hmac'], $j['key-id'] ];
		}

		protected function _toJson(): array {
			return [ 'company-alias' => $this->companyAlias, 'hmac' => $this->hmac, 'key-id' => $this->keyId ];
		}
	}

	class Partial_TerminateCompanyRequest extends Onslip360Object {
		function __construct(
			public string|null $companyAlias = null,
			public string|null $hmac = null,
			public string|null $keyId = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['company-alias'] ?? null, $j['hmac'] ?? null, $j['key-id'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'company-alias' => $this->companyAlias, 'hmac' => $this->hmac, 'key-id' => $this->keyId ];
		}
	}

	class Till extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $name,
			public AccountConfig|null $accountConfig = null,
			public string|null $clientUserAgent = null,
			public string|null $clientVersion = null,
			public CloudControlUnit|null $cloudControlUnit = null,
			public TillConfig|null $config = null,
			public string|null $controlUnitId = null,
			public string|null $created = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public string|null $deviceId = null,
			public string|null $deviceKey = null,
			public int|null $id = null,
			public array|null $labels = null,
			public int|null $location = null,
			public string|null $logicalDeviceId = null,
			public array|null $tags = null,
			public Till\Type|null $type = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], AccountConfig::o($j['account-config'] ?? null), $j['client-user-agent'] ?? null, $j['client-version'] ?? null, CloudControlUnit::o($j['cloud-control-unit'] ?? null), TillConfig::o($j['config'] ?? null), $j['control-unit-id'] ?? null, $j['created'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['device-id'] ?? null, $j['device-key'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['location'] ?? null, $j['logical-device-id'] ?? null, $j['tags'] ?? null, static::e(Till\Type::from(...), $j['type'] ?? null), $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'account-config' => $this->accountConfig, 'client-user-agent' => $this->clientUserAgent, 'client-version' => $this->clientVersion, 'cloud-control-unit' => $this->cloudControlUnit, 'config' => $this->config, 'control-unit-id' => $this->controlUnitId, 'created' => $this->created, 'deleted' => $this->deleted, 'description' => $this->description, 'device-id' => $this->deviceId, 'device-key' => $this->deviceKey, 'id' => $this->id, 'labels' => $this->labels, 'location' => $this->location, 'logical-device-id' => $this->logicalDeviceId, 'tags' => $this->tags, 'type' => $this->type, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_Till extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public Partial_AccountConfig|null|Nil $accountConfig = null,
			public string|null|Nil $clientUserAgent = null,
			public string|null|Nil $clientVersion = null,
			public Partial_CloudControlUnit|null|Nil $cloudControlUnit = null,
			public Partial_TillConfig|null|Nil $config = null,
			public string|null|Nil $controlUnitId = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $description = null,
			public string|null|Nil $deviceId = null,
			public string|null|Nil $deviceKey = null,
			public array|null|Nil $labels = null,
			public int|null|Nil $location = null,
			public string|null|Nil $logicalDeviceId = null,
			public string|null $name = null,
			public array|null|Nil $tags = null,
			public Till\Type|null|Nil $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_AccountConfig::o($j['account-config'] ?? null), $j['client-user-agent'] ?? null, $j['client-version'] ?? null, Partial_CloudControlUnit::o($j['cloud-control-unit'] ?? null), Partial_TillConfig::o($j['config'] ?? null), $j['control-unit-id'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['device-id'] ?? null, $j['device-key'] ?? null, $j['labels'] ?? null, $j['location'] ?? null, $j['logical-device-id'] ?? null, $j['name'] ?? null, $j['tags'] ?? null, static::e(Till\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'account-config' => $this->accountConfig, 'client-user-agent' => $this->clientUserAgent, 'client-version' => $this->clientVersion, 'cloud-control-unit' => $this->cloudControlUnit, 'config' => $this->config, 'control-unit-id' => $this->controlUnitId, 'deleted' => $this->deleted, 'description' => $this->description, 'device-id' => $this->deviceId, 'device-key' => $this->deviceKey, 'labels' => $this->labels, 'location' => $this->location, 'logical-device-id' => $this->logicalDeviceId, 'name' => $this->name, 'tags' => $this->tags, 'type' => $this->type ];
		}
	}

	class Stored_Till extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public string $name,
			public string $updated,
			public AccountConfig|null $accountConfig = null,
			public string|null $clientUserAgent = null,
			public string|null $clientVersion = null,
			public CloudControlUnit|null $cloudControlUnit = null,
			public TillConfig|null $config = null,
			public string|null $controlUnitId = null,
			public string|null $deleted = null,
			public string|null $description = null,
			public string|null $deviceId = null,
			public string|null $deviceKey = null,
			public array|null $labels = null,
			public int|null $location = null,
			public string|null $logicalDeviceId = null,
			public array|null $tags = null,
			public Till\Type|null $type = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['name'], $j['updated'], AccountConfig::o($j['account-config'] ?? null), $j['client-user-agent'] ?? null, $j['client-version'] ?? null, CloudControlUnit::o($j['cloud-control-unit'] ?? null), TillConfig::o($j['config'] ?? null), $j['control-unit-id'] ?? null, $j['deleted'] ?? null, $j['description'] ?? null, $j['device-id'] ?? null, $j['device-key'] ?? null, $j['labels'] ?? null, $j['location'] ?? null, $j['logical-device-id'] ?? null, $j['tags'] ?? null, static::e(Till\Type::from(...), $j['type'] ?? null), $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'name' => $this->name, 'updated' => $this->updated, 'account-config' => $this->accountConfig, 'client-user-agent' => $this->clientUserAgent, 'client-version' => $this->clientVersion, 'cloud-control-unit' => $this->cloudControlUnit, 'config' => $this->config, 'control-unit-id' => $this->controlUnitId, 'deleted' => $this->deleted, 'description' => $this->description, 'device-id' => $this->deviceId, 'device-key' => $this->deviceKey, 'labels' => $this->labels, 'location' => $this->location, 'logical-device-id' => $this->logicalDeviceId, 'tags' => $this->tags, 'type' => $this->type, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class TillConfig extends Onslip360Object {
		/**
		 * @param string[]|null $autoCloseBatchSchedules
		 * @param PeripheralBinding[]|null $peripheralBindings
		*/
		function __construct(
			public array|null $autoCloseBatchSchedules = null,
			public int|null $buttonMap = null,
			public array|null $peripheralBindings = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['auto-close-batch-schedules'] ?? null, $j['button-map'] ?? null, PeripheralBinding::a($j['peripheral-bindings'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'auto-close-batch-schedules' => $this->autoCloseBatchSchedules, 'button-map' => $this->buttonMap, 'peripheral-bindings' => $this->peripheralBindings ];
		}
	}

	class Partial_TillConfig extends Onslip360Object {
		/**
		 * @param string[]|null|Nil $autoCloseBatchSchedules
		 * @param Partial_PeripheralBinding[]|null|Nil $peripheralBindings
		*/
		function __construct(
			public array|null|Nil $autoCloseBatchSchedules = null,
			public int|null|Nil $buttonMap = null,
			public array|null|Nil $peripheralBindings = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['auto-close-batch-schedules'] ?? null, $j['button-map'] ?? null, Partial_PeripheralBinding::a($j['peripheral-bindings'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'auto-close-batch-schedules' => $this->autoCloseBatchSchedules, 'button-map' => $this->buttonMap, 'peripheral-bindings' => $this->peripheralBindings ];
		}
	}

	class TillRegistrationInfo extends Onslip360Object {
		function __construct(
			public string $name,
			public string|null $description = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], $j['description'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'description' => $this->description ];
		}
	}

	class Partial_TillRegistrationInfo extends Onslip360Object {
		function __construct(
			public string|null|Nil $description = null,
			public string|null $name = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['description'] ?? null, $j['name'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'description' => $this->description, 'name' => $this->name ];
		}
	}

	class TillState extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public bool $batchIsOpen,
			public int $currentBatchId,
			public Summary $grandTotalAmount,
			public Summary $grandTotalReturns,
			public Summary $grandTotalSales,
			public int $normalReceiptCounter,
			public int $profoReceiptCounter,
			public int $trainingReceiptCounter,
			public int $xReportCounter,
			public int $zReportCounter,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public bool|null $zReportPending = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['batch-is-open'], $j['current-batch-id'], Summary::o($j['grand-total-amount']), Summary::o($j['grand-total-returns']), Summary::o($j['grand-total-sales']), $j['normal-receipt-counter'], $j['profo-receipt-counter'], $j['training-receipt-counter'], $j['x-report-counter'], $j['z-report-counter'], $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['z-report-pending'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'batch-is-open' => $this->batchIsOpen, 'current-batch-id' => $this->currentBatchId, 'grand-total-amount' => $this->grandTotalAmount, 'grand-total-returns' => $this->grandTotalReturns, 'grand-total-sales' => $this->grandTotalSales, 'normal-receipt-counter' => $this->normalReceiptCounter, 'profo-receipt-counter' => $this->profoReceiptCounter, 'training-receipt-counter' => $this->trainingReceiptCounter, 'x-report-counter' => $this->xReportCounter, 'z-report-counter' => $this->zReportCounter, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'z-report-pending' => $this->zReportPending ];
		}
	}

	class Partial_TillState extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public bool|null $batchIsOpen = null,
			public int|null $currentBatchId = null,
			public string|null|Nil $deleted = null,
			public Partial_Summary|null $grandTotalAmount = null,
			public Partial_Summary|null $grandTotalReturns = null,
			public Partial_Summary|null $grandTotalSales = null,
			public array|null|Nil $labels = null,
			public int|null $normalReceiptCounter = null,
			public int|null $profoReceiptCounter = null,
			public array|null|Nil $tags = null,
			public int|null $trainingReceiptCounter = null,
			public int|null $xReportCounter = null,
			public int|null $zReportCounter = null,
			public bool|null|Nil $zReportPending = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['batch-is-open'] ?? null, $j['current-batch-id'] ?? null, $j['deleted'] ?? null, Partial_Summary::o($j['grand-total-amount'] ?? null), Partial_Summary::o($j['grand-total-returns'] ?? null), Partial_Summary::o($j['grand-total-sales'] ?? null), $j['labels'] ?? null, $j['normal-receipt-counter'] ?? null, $j['profo-receipt-counter'] ?? null, $j['tags'] ?? null, $j['training-receipt-counter'] ?? null, $j['x-report-counter'] ?? null, $j['z-report-counter'] ?? null, $j['z-report-pending'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'batch-is-open' => $this->batchIsOpen, 'current-batch-id' => $this->currentBatchId, 'deleted' => $this->deleted, 'grand-total-amount' => $this->grandTotalAmount, 'grand-total-returns' => $this->grandTotalReturns, 'grand-total-sales' => $this->grandTotalSales, 'labels' => $this->labels, 'normal-receipt-counter' => $this->normalReceiptCounter, 'profo-receipt-counter' => $this->profoReceiptCounter, 'tags' => $this->tags, 'training-receipt-counter' => $this->trainingReceiptCounter, 'x-report-counter' => $this->xReportCounter, 'z-report-counter' => $this->zReportCounter, 'z-report-pending' => $this->zReportPending ];
		}
	}

	class Stored_TillState extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public bool $batchIsOpen,
			public string $created,
			public int $currentBatchId,
			public Summary $grandTotalAmount,
			public Summary $grandTotalReturns,
			public Summary $grandTotalSales,
			public int $id,
			public int $normalReceiptCounter,
			public int $profoReceiptCounter,
			public int $trainingReceiptCounter,
			public string $updated,
			public int $xReportCounter,
			public int $zReportCounter,
			public string|null $deleted = null,
			public array|null $labels = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public bool|null $zReportPending = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['batch-is-open'], $j['created'], $j['current-batch-id'], Summary::o($j['grand-total-amount']), Summary::o($j['grand-total-returns']), Summary::o($j['grand-total-sales']), $j['id'], $j['normal-receipt-counter'], $j['profo-receipt-counter'], $j['training-receipt-counter'], $j['updated'], $j['x-report-counter'], $j['z-report-counter'], $j['deleted'] ?? null, $j['labels'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['z-report-pending'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'batch-is-open' => $this->batchIsOpen, 'created' => $this->created, 'current-batch-id' => $this->currentBatchId, 'grand-total-amount' => $this->grandTotalAmount, 'grand-total-returns' => $this->grandTotalReturns, 'grand-total-sales' => $this->grandTotalSales, 'id' => $this->id, 'normal-receipt-counter' => $this->normalReceiptCounter, 'profo-receipt-counter' => $this->profoReceiptCounter, 'training-receipt-counter' => $this->trainingReceiptCounter, 'updated' => $this->updated, 'x-report-counter' => $this->xReportCounter, 'z-report-counter' => $this->zReportCounter, 'deleted' => $this->deleted, 'labels' => $this->labels, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'z-report-pending' => $this->zReportPending ];
		}
	}

	class TillSummary extends Onslip360Object {
		function __construct(
			public string $created,
			public int $till,
			public Till\Type $type,
			public string|null $activated = null,
			public string|null $deleted = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['till'], static::e(Till\Type::from(...), $j['type']), $j['activated'] ?? null, $j['deleted'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'till' => $this->till, 'type' => $this->type, 'activated' => $this->activated, 'deleted' => $this->deleted ];
		}
	}

	class Partial_TillSummary extends Onslip360Object {
		function __construct(
			public string|null|Nil $activated = null,
			public string|null $created = null,
			public string|null|Nil $deleted = null,
			public int|null $till = null,
			public Till\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['activated'] ?? null, $j['created'] ?? null, $j['deleted'] ?? null, $j['till'] ?? null, static::e(Till\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'activated' => $this->activated, 'created' => $this->created, 'deleted' => $this->deleted, 'till' => $this->till, 'type' => $this->type ];
		}
	}

	class TransactionSummary extends Onslip360Object {
		function __construct(
			public float $cbAmount,
			public float $extraAmount,
			public float $purchaseAmount,
			public int $purchaseCount,
			public float $refundAmount,
			public int $refundCount,
			public float $vatAmount,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['cb-amount'], $j['extra-amount'], $j['purchase-amount'], $j['purchase-count'], $j['refund-amount'], $j['refund-count'], $j['vat-amount'] ];
		}

		protected function _toJson(): array {
			return [ 'cb-amount' => $this->cbAmount, 'extra-amount' => $this->extraAmount, 'purchase-amount' => $this->purchaseAmount, 'purchase-count' => $this->purchaseCount, 'refund-amount' => $this->refundAmount, 'refund-count' => $this->refundCount, 'vat-amount' => $this->vatAmount ];
		}
	}

	class Partial_TransactionSummary extends Onslip360Object {
		function __construct(
			public float|null $cbAmount = null,
			public float|null $extraAmount = null,
			public float|null $purchaseAmount = null,
			public int|null $purchaseCount = null,
			public float|null $refundAmount = null,
			public int|null $refundCount = null,
			public float|null $vatAmount = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['cb-amount'] ?? null, $j['extra-amount'] ?? null, $j['purchase-amount'] ?? null, $j['purchase-count'] ?? null, $j['refund-amount'] ?? null, $j['refund-count'] ?? null, $j['vat-amount'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'cb-amount' => $this->cbAmount, 'extra-amount' => $this->extraAmount, 'purchase-amount' => $this->purchaseAmount, 'purchase-count' => $this->purchaseCount, 'refund-amount' => $this->refundAmount, 'refund-count' => $this->refundCount, 'vat-amount' => $this->vatAmount ];
		}
	}

	class TransactionSummaryGroup extends Onslip360Object {
		function __construct(
			public string $name,
			public TransactionSummary $summary,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], TransactionSummary::o($j['summary']) ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'summary' => $this->summary ];
		}
	}

	class Partial_TransactionSummaryGroup extends Onslip360Object {
		function __construct(
			public string|null $name = null,
			public Partial_TransactionSummary|null $summary = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'] ?? null, Partial_TransactionSummary::o($j['summary'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'summary' => $this->summary ];
		}
	}

	class Trigger extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $schedules
		 * @param string[]|null $tags
		*/
		function __construct(
			public TriggerAction $action,
			public Trigger\Type $type,
			public string|null $created = null,
			public string|null $deleted = null,
			public string|null $endDate = null,
			public int|null $id = null,
			public array|null $labels = null,
			public QueryTrigger|null $query = null,
			public array|null $schedules = null,
			public string|null $startDate = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ TriggerAction::o($j['action']), static::e(Trigger\Type::from(...), $j['type']), $j['created'] ?? null, $j['deleted'] ?? null, $j['end-date'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, QueryTrigger::o($j['query'] ?? null), $j['schedules'] ?? null, $j['start-date'] ?? null, $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['user'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'action' => $this->action, 'type' => $this->type, 'created' => $this->created, 'deleted' => $this->deleted, 'end-date' => $this->endDate, 'id' => $this->id, 'labels' => $this->labels, 'query' => $this->query, 'schedules' => $this->schedules, 'start-date' => $this->startDate, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'user' => $this->user ];
		}
	}

	class Partial_Trigger extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $schedules
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public Partial_TriggerAction|null $action = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $endDate = null,
			public array|null|Nil $labels = null,
			public Partial_QueryTrigger|null|Nil $query = null,
			public array|null|Nil $schedules = null,
			public string|null|Nil $startDate = null,
			public array|null|Nil $tags = null,
			public Trigger\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_TriggerAction::o($j['action'] ?? null), $j['deleted'] ?? null, $j['end-date'] ?? null, $j['labels'] ?? null, Partial_QueryTrigger::o($j['query'] ?? null), $j['schedules'] ?? null, $j['start-date'] ?? null, $j['tags'] ?? null, static::e(Trigger\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'action' => $this->action, 'deleted' => $this->deleted, 'end-date' => $this->endDate, 'labels' => $this->labels, 'query' => $this->query, 'schedules' => $this->schedules, 'start-date' => $this->startDate, 'tags' => $this->tags, 'type' => $this->type ];
		}
	}

	class Stored_Trigger extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $schedules
		 * @param string[]|null $tags
		*/
		function __construct(
			public TriggerAction $action,
			public string $created,
			public int $id,
			public Trigger\Type $type,
			public string $updated,
			public int $user,
			public string|null $deleted = null,
			public string|null $endDate = null,
			public array|null $labels = null,
			public QueryTrigger|null $query = null,
			public array|null $schedules = null,
			public string|null $startDate = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ TriggerAction::o($j['action']), $j['created'], $j['id'], static::e(Trigger\Type::from(...), $j['type']), $j['updated'], $j['user'], $j['deleted'] ?? null, $j['end-date'] ?? null, $j['labels'] ?? null, QueryTrigger::o($j['query'] ?? null), $j['schedules'] ?? null, $j['start-date'] ?? null, $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'action' => $this->action, 'created' => $this->created, 'id' => $this->id, 'type' => $this->type, 'updated' => $this->updated, 'user' => $this->user, 'deleted' => $this->deleted, 'end-date' => $this->endDate, 'labels' => $this->labels, 'query' => $this->query, 'schedules' => $this->schedules, 'start-date' => $this->startDate, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class TriggerAction extends Onslip360Object {
		function __construct(
			public string $name,
			public TriggerAction\Type $type,
			public string|null $description = null,
			public DigitalReceiptAction|null $digitalReceiptAction = null,
			public DMCampaignAction|null $dmCampaign = null,
			public ERPAction|null $erpIntegration = null,
			public TriggerAction\LogLevel|null $logLevel = null,
			public string|null $notificationUri = null,
			public ReportAction|null $report = null,
			public SendEmailAction|null $sendEmailAction = null,
			public WebhookAction|null $webhook = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['name'], static::e(TriggerAction\Type::from(...), $j['type']), $j['description'] ?? null, DigitalReceiptAction::o($j['digital-receipt-action'] ?? null), DMCampaignAction::o($j['dm-campaign'] ?? null), ERPAction::o($j['erp-integration'] ?? null), static::e(TriggerAction\LogLevel::from(...), $j['log-level'] ?? null), $j['notification-uri'] ?? null, ReportAction::o($j['report'] ?? null), SendEmailAction::o($j['send-email-action'] ?? null), WebhookAction::o($j['webhook'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'name' => $this->name, 'type' => $this->type, 'description' => $this->description, 'digital-receipt-action' => $this->digitalReceiptAction, 'dm-campaign' => $this->dmCampaign, 'erp-integration' => $this->erpIntegration, 'log-level' => $this->logLevel, 'notification-uri' => $this->notificationUri, 'report' => $this->report, 'send-email-action' => $this->sendEmailAction, 'webhook' => $this->webhook ];
		}
	}

	class Partial_TriggerAction extends Onslip360Object {
		function __construct(
			public string|null|Nil $description = null,
			public Partial_DigitalReceiptAction|null|Nil $digitalReceiptAction = null,
			public Partial_DMCampaignAction|null|Nil $dmCampaign = null,
			public Partial_ERPAction|null|Nil $erpIntegration = null,
			public TriggerAction\LogLevel|null|Nil $logLevel = null,
			public string|null $name = null,
			public string|null|Nil $notificationUri = null,
			public Partial_ReportAction|null|Nil $report = null,
			public Partial_SendEmailAction|null|Nil $sendEmailAction = null,
			public TriggerAction\Type|null $type = null,
			public Partial_WebhookAction|null|Nil $webhook = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['description'] ?? null, Partial_DigitalReceiptAction::o($j['digital-receipt-action'] ?? null), Partial_DMCampaignAction::o($j['dm-campaign'] ?? null), Partial_ERPAction::o($j['erp-integration'] ?? null), static::e(TriggerAction\LogLevel::from(...), $j['log-level'] ?? null), $j['name'] ?? null, $j['notification-uri'] ?? null, Partial_ReportAction::o($j['report'] ?? null), Partial_SendEmailAction::o($j['send-email-action'] ?? null), static::e(TriggerAction\Type::from(...), $j['type'] ?? null), Partial_WebhookAction::o($j['webhook'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'description' => $this->description, 'digital-receipt-action' => $this->digitalReceiptAction, 'dm-campaign' => $this->dmCampaign, 'erp-integration' => $this->erpIntegration, 'log-level' => $this->logLevel, 'name' => $this->name, 'notification-uri' => $this->notificationUri, 'report' => $this->report, 'send-email-action' => $this->sendEmailAction, 'type' => $this->type, 'webhook' => $this->webhook ];
		}
	}

	class TriggerEvent extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $description,
			public TriggerAction\LogLevel $logLevel,
			public int $retryCount,
			public TriggerAction $triggerAction,
			public TriggerEvent\Status $triggerStatus,
			public string|null $created = null,
			public string|null $deleted = null,
			public int|null $id = null,
			public array|null $labels = null,
			public FileArchive|null $result = null,
			public ServerError|null $serverError = null,
			public string|null $statusMessage = null,
			public array|null $tags = null,
			public int|null $trigger = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
			public int|null $user = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['description'], static::e(TriggerAction\LogLevel::from(...), $j['log-level']), $j['retry-count'], TriggerAction::o($j['trigger-action']), static::e(TriggerEvent\Status::from(...), $j['trigger-status']), $j['created'] ?? null, $j['deleted'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, FileArchive::o($j['result'] ?? null), ServerError::o($j['server-error'] ?? null), $j['status-message'] ?? null, $j['tags'] ?? null, $j['trigger'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null, $j['user'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'description' => $this->description, 'log-level' => $this->logLevel, 'retry-count' => $this->retryCount, 'trigger-action' => $this->triggerAction, 'trigger-status' => $this->triggerStatus, 'created' => $this->created, 'deleted' => $this->deleted, 'id' => $this->id, 'labels' => $this->labels, 'result' => $this->result, 'server-error' => $this->serverError, 'status-message' => $this->statusMessage, 'tags' => $this->tags, 'trigger' => $this->trigger, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom, 'user' => $this->user ];
		}
	}

	class Partial_TriggerEvent extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null|Nil $deleted = null,
			public string|null $description = null,
			public array|null|Nil $labels = null,
			public TriggerAction\LogLevel|null $logLevel = null,
			public Partial_FileArchive|null|Nil $result = null,
			public int|null $retryCount = null,
			public Partial_ServerError|null|Nil $serverError = null,
			public string|null|Nil $statusMessage = null,
			public array|null|Nil $tags = null,
			public int|null|Nil $trigger = null,
			public Partial_TriggerAction|null $triggerAction = null,
			public TriggerEvent\Status|null $triggerStatus = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['deleted'] ?? null, $j['description'] ?? null, $j['labels'] ?? null, static::e(TriggerAction\LogLevel::from(...), $j['log-level'] ?? null), Partial_FileArchive::o($j['result'] ?? null), $j['retry-count'] ?? null, Partial_ServerError::o($j['server-error'] ?? null), $j['status-message'] ?? null, $j['tags'] ?? null, $j['trigger'] ?? null, Partial_TriggerAction::o($j['trigger-action'] ?? null), static::e(TriggerEvent\Status::from(...), $j['trigger-status'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'deleted' => $this->deleted, 'description' => $this->description, 'labels' => $this->labels, 'log-level' => $this->logLevel, 'result' => $this->result, 'retry-count' => $this->retryCount, 'server-error' => $this->serverError, 'status-message' => $this->statusMessage, 'tags' => $this->tags, 'trigger' => $this->trigger, 'trigger-action' => $this->triggerAction, 'trigger-status' => $this->triggerStatus ];
		}
	}

	class Stored_TriggerEvent extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public string $description,
			public int $id,
			public TriggerAction\LogLevel $logLevel,
			public int $retryCount,
			public TriggerAction $triggerAction,
			public TriggerEvent\Status $triggerStatus,
			public string $updated,
			public int $user,
			public string|null $deleted = null,
			public array|null $labels = null,
			public FileArchive|null $result = null,
			public ServerError|null $serverError = null,
			public string|null $statusMessage = null,
			public array|null $tags = null,
			public int|null $trigger = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['description'], $j['id'], static::e(TriggerAction\LogLevel::from(...), $j['log-level']), $j['retry-count'], TriggerAction::o($j['trigger-action']), static::e(TriggerEvent\Status::from(...), $j['trigger-status']), $j['updated'], $j['user'], $j['deleted'] ?? null, $j['labels'] ?? null, FileArchive::o($j['result'] ?? null), ServerError::o($j['server-error'] ?? null), $j['status-message'] ?? null, $j['tags'] ?? null, $j['trigger'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'description' => $this->description, 'id' => $this->id, 'log-level' => $this->logLevel, 'retry-count' => $this->retryCount, 'trigger-action' => $this->triggerAction, 'trigger-status' => $this->triggerStatus, 'updated' => $this->updated, 'user' => $this->user, 'deleted' => $this->deleted, 'labels' => $this->labels, 'result' => $this->result, 'server-error' => $this->serverError, 'status-message' => $this->statusMessage, 'tags' => $this->tags, 'trigger' => $this->trigger, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class UsageEntry extends Onslip360Object {
		function __construct(
			public UsageEntry\Type $type,
			public int|null $inventoryAdjustment = null,
			public int|null $location = null,
			public PasswordReset|null $passwordReset = null,
			public PasswordResetChallenge|null $passwordResetChallenge = null,
			public int|null $product = null,
			public int|null $productGroup = null,
			public ShiftHistoryExport|null $shiftHistory = null,
			public StockBalanceTransaction|null $stockBalanceTransaction = null,
			public int|null $tab = null,
			public int|null $user = null,
			public int|null $voucher = null,
			public VoucherTransaction|null $voucherTransaction = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ static::e(UsageEntry\Type::from(...), $j['type']), $j['inventory-adjustment'] ?? null, $j['location'] ?? null, PasswordReset::o($j['password-reset'] ?? null), PasswordResetChallenge::o($j['password-reset-challenge'] ?? null), $j['product'] ?? null, $j['product-group'] ?? null, ShiftHistoryExport::o($j['shift-history'] ?? null), StockBalanceTransaction::o($j['stock-balance-transaction'] ?? null), $j['tab'] ?? null, $j['user'] ?? null, $j['voucher'] ?? null, VoucherTransaction::o($j['voucher-transaction'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'type' => $this->type, 'inventory-adjustment' => $this->inventoryAdjustment, 'location' => $this->location, 'password-reset' => $this->passwordReset, 'password-reset-challenge' => $this->passwordResetChallenge, 'product' => $this->product, 'product-group' => $this->productGroup, 'shift-history' => $this->shiftHistory, 'stock-balance-transaction' => $this->stockBalanceTransaction, 'tab' => $this->tab, 'user' => $this->user, 'voucher' => $this->voucher, 'voucher-transaction' => $this->voucherTransaction ];
		}
	}

	class Partial_UsageEntry extends Onslip360Object {
		function __construct(
			public int|null|Nil $inventoryAdjustment = null,
			public int|null|Nil $location = null,
			public Partial_PasswordReset|null|Nil $passwordReset = null,
			public Partial_PasswordResetChallenge|null|Nil $passwordResetChallenge = null,
			public int|null|Nil $product = null,
			public int|null|Nil $productGroup = null,
			public Partial_ShiftHistoryExport|null|Nil $shiftHistory = null,
			public Partial_StockBalanceTransaction|null|Nil $stockBalanceTransaction = null,
			public int|null|Nil $tab = null,
			public UsageEntry\Type|null $type = null,
			public int|null|Nil $user = null,
			public int|null|Nil $voucher = null,
			public Partial_VoucherTransaction|null|Nil $voucherTransaction = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['inventory-adjustment'] ?? null, $j['location'] ?? null, Partial_PasswordReset::o($j['password-reset'] ?? null), Partial_PasswordResetChallenge::o($j['password-reset-challenge'] ?? null), $j['product'] ?? null, $j['product-group'] ?? null, Partial_ShiftHistoryExport::o($j['shift-history'] ?? null), Partial_StockBalanceTransaction::o($j['stock-balance-transaction'] ?? null), $j['tab'] ?? null, static::e(UsageEntry\Type::from(...), $j['type'] ?? null), $j['user'] ?? null, $j['voucher'] ?? null, Partial_VoucherTransaction::o($j['voucher-transaction'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'inventory-adjustment' => $this->inventoryAdjustment, 'location' => $this->location, 'password-reset' => $this->passwordReset, 'password-reset-challenge' => $this->passwordResetChallenge, 'product' => $this->product, 'product-group' => $this->productGroup, 'shift-history' => $this->shiftHistory, 'stock-balance-transaction' => $this->stockBalanceTransaction, 'tab' => $this->tab, 'type' => $this->type, 'user' => $this->user, 'voucher' => $this->voucher, 'voucher-transaction' => $this->voucherTransaction ];
		}
	}

	class User extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param int[]|null $roles
		 * @param User\SystemRole[]|null $systemRoles
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $alias,
			public string $email,
			public string $name,
			public string $password,
			public string $pin,
			public string|null $created = null,
			public string|null $deleted = null,
			public bool|null $demon = null,
			public int|null $id = null,
			public string|null $identityNumber = null,
			public array|null $labels = null,
			public array|null $roles = null,
			public array|null $systemRoles = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'], $j['email'], $j['name'], $j['password'], $j['pin'], $j['created'] ?? null, $j['deleted'] ?? null, $j['demon'] ?? null, $j['id'] ?? null, $j['identity-number'] ?? null, $j['labels'] ?? null, $j['roles'] ?? null, static::e(User\SystemRole::from(...), $j['system-roles'] ?? null), $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'email' => $this->email, 'name' => $this->name, 'password' => $this->password, 'pin' => $this->pin, 'created' => $this->created, 'deleted' => $this->deleted, 'demon' => $this->demon, 'id' => $this->id, 'identity-number' => $this->identityNumber, 'labels' => $this->labels, 'roles' => $this->roles, 'system-roles' => $this->systemRoles, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_User extends Onslip360Object {
		/**
		 * @param int[]|null|Nil $labels
		 * @param int[]|null|Nil $roles
		 * @param User\SystemRole[]|null|Nil $systemRoles
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public string|null $alias = null,
			public string|null|Nil $deleted = null,
			public bool|null|Nil $demon = null,
			public string|null $email = null,
			public string|null|Nil $identityNumber = null,
			public array|null|Nil $labels = null,
			public string|null $name = null,
			public string|null $password = null,
			public string|null $pin = null,
			public array|null|Nil $roles = null,
			public array|null|Nil $systemRoles = null,
			public array|null|Nil $tags = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'] ?? null, $j['deleted'] ?? null, $j['demon'] ?? null, $j['email'] ?? null, $j['identity-number'] ?? null, $j['labels'] ?? null, $j['name'] ?? null, $j['password'] ?? null, $j['pin'] ?? null, $j['roles'] ?? null, static::e(User\SystemRole::from(...), $j['system-roles'] ?? null), $j['tags'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'deleted' => $this->deleted, 'demon' => $this->demon, 'email' => $this->email, 'identity-number' => $this->identityNumber, 'labels' => $this->labels, 'name' => $this->name, 'password' => $this->password, 'pin' => $this->pin, 'roles' => $this->roles, 'system-roles' => $this->systemRoles, 'tags' => $this->tags ];
		}
	}

	class Stored_User extends Onslip360Object {
		/**
		 * @param int[]|null $labels
		 * @param int[]|null $roles
		 * @param User\SystemRole[]|null $systemRoles
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $alias,
			public string $created,
			public string $email,
			public int $id,
			public string $name,
			public string $updated,
			public string|null $deleted = null,
			public bool|null $demon = null,
			public string|null $identityNumber = null,
			public array|null $labels = null,
			public string|null $password = null,
			public string|null $pin = null,
			public array|null $roles = null,
			public array|null $systemRoles = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'], $j['created'], $j['email'], $j['id'], $j['name'], $j['updated'], $j['deleted'] ?? null, $j['demon'] ?? null, $j['identity-number'] ?? null, $j['labels'] ?? null, $j['password'] ?? null, $j['pin'] ?? null, $j['roles'] ?? null, static::e(User\SystemRole::from(...), $j['system-roles'] ?? null), $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'created' => $this->created, 'email' => $this->email, 'id' => $this->id, 'name' => $this->name, 'updated' => $this->updated, 'deleted' => $this->deleted, 'demon' => $this->demon, 'identity-number' => $this->identityNumber, 'labels' => $this->labels, 'password' => $this->password, 'pin' => $this->pin, 'roles' => $this->roles, 'system-roles' => $this->systemRoles, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class UserRegistrationInfo extends Onslip360Object {
		function __construct(
			public string $alias,
			public string $email,
			public string $name,
			public string $password,
			public string $pin,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'], $j['email'], $j['name'], $j['password'], $j['pin'] ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'email' => $this->email, 'name' => $this->name, 'password' => $this->password, 'pin' => $this->pin ];
		}
	}

	class Partial_UserRegistrationInfo extends Onslip360Object {
		function __construct(
			public string|null $alias = null,
			public string|null $email = null,
			public string|null $name = null,
			public string|null $password = null,
			public string|null $pin = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['alias'] ?? null, $j['email'] ?? null, $j['name'] ?? null, $j['password'] ?? null, $j['pin'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'alias' => $this->alias, 'email' => $this->email, 'name' => $this->name, 'password' => $this->password, 'pin' => $this->pin ];
		}
	}

	class VATSummary extends Onslip360Object {
		function __construct(
			public float $grossAmount,
			public float $netAmount,
			public float $vatAmount,
			public float $vatRate,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['gross-amount'], $j['net-amount'], $j['vat-amount'], $j['vat-rate'] ];
		}

		protected function _toJson(): array {
			return [ 'gross-amount' => $this->grossAmount, 'net-amount' => $this->netAmount, 'vat-amount' => $this->vatAmount, 'vat-rate' => $this->vatRate ];
		}
	}

	class Partial_VATSummary extends Onslip360Object {
		function __construct(
			public float|null $grossAmount = null,
			public float|null $netAmount = null,
			public float|null $vatAmount = null,
			public float|null $vatRate = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['gross-amount'] ?? null, $j['net-amount'] ?? null, $j['vat-amount'] ?? null, $j['vat-rate'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'gross-amount' => $this->grossAmount, 'net-amount' => $this->netAmount, 'vat-amount' => $this->vatAmount, 'vat-rate' => $this->vatRate ];
		}
	}

	class VirtualDevice extends Onslip360Object {
		function __construct(
			public string $address,
			public string $deviceName,
			public string $deviceType,
			public string $serviceHint,
			public string $serviceType,
			public int|null $port = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['address'], $j['device-name'], $j['device-type'], $j['service-hint'], $j['service-type'], $j['port'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'address' => $this->address, 'device-name' => $this->deviceName, 'device-type' => $this->deviceType, 'service-hint' => $this->serviceHint, 'service-type' => $this->serviceType, 'port' => $this->port ];
		}
	}

	class Partial_VirtualDevice extends Onslip360Object {
		function __construct(
			public string|null $address = null,
			public string|null $deviceName = null,
			public string|null $deviceType = null,
			public int|null|Nil $port = null,
			public string|null $serviceHint = null,
			public string|null $serviceType = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['address'] ?? null, $j['device-name'] ?? null, $j['device-type'] ?? null, $j['port'] ?? null, $j['service-hint'] ?? null, $j['service-type'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'address' => $this->address, 'device-name' => $this->deviceName, 'device-type' => $this->deviceType, 'port' => $this->port, 'service-hint' => $this->serviceHint, 'service-type' => $this->serviceType ];
		}
	}

	class VismaActivation extends Onslip360Object {
		function __construct(
			public string $authorizationCode,
			public string $redirectUri,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['authorization-code'], $j['redirect-uri'] ];
		}

		protected function _toJson(): array {
			return [ 'authorization-code' => $this->authorizationCode, 'redirect-uri' => $this->redirectUri ];
		}
	}

	class Partial_VismaActivation extends Onslip360Object {
		function __construct(
			public string|null $authorizationCode = null,
			public string|null $redirectUri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['authorization-code'] ?? null, $j['redirect-uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'authorization-code' => $this->authorizationCode, 'redirect-uri' => $this->redirectUri ];
		}
	}

	class VismaConfig extends Onslip360Object {
		function __construct(
			public string $apiUri,
			public string $authUri,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['api-uri'], $j['auth-uri'] ];
		}

		protected function _toJson(): array {
			return [ 'api-uri' => $this->apiUri, 'auth-uri' => $this->authUri ];
		}
	}

	class Partial_VismaConfig extends Onslip360Object {
		function __construct(
			public string|null $apiUri = null,
			public string|null $authUri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['api-uri'] ?? null, $j['auth-uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'api-uri' => $this->apiUri, 'auth-uri' => $this->authUri ];
		}
	}

	class VivaWalletConfig extends Onslip360Object {
		function __construct(
			public string $clientId,
			public string $clientSecret,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['client-id'], $j['client-secret'] ];
		}

		protected function _toJson(): array {
			return [ 'client-id' => $this->clientId, 'client-secret' => $this->clientSecret ];
		}
	}

	class Partial_VivaWalletConfig extends Onslip360Object {
		function __construct(
			public string|null $clientId = null,
			public string|null $clientSecret = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['client-id'] ?? null, $j['client-secret'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'client-id' => $this->clientId, 'client-secret' => $this->clientSecret ];
		}
	}

	class Voucher extends Onslip360Object {
		/**
		 * @param string[] $identifiers
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public array $identifiers,
			public Voucher\Type $type,
			public CouponVoucher|null $coupon = null,
			public string|null $created = null,
			public int|null $customer = null,
			public string|null $deleted = null,
			public string|null $expires = null,
			public int|null $id = null,
			public array|null $labels = null,
			public PaymentVoucher|null $payment = null,
			public array|null $tags = null,
			public string|null $updated = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['identifiers'], static::e(Voucher\Type::from(...), $j['type']), CouponVoucher::o($j['coupon'] ?? null), $j['created'] ?? null, $j['customer'] ?? null, $j['deleted'] ?? null, $j['expires'] ?? null, $j['id'] ?? null, $j['labels'] ?? null, PaymentVoucher::o($j['payment'] ?? null), $j['tags'] ?? null, $j['updated'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'identifiers' => $this->identifiers, 'type' => $this->type, 'coupon' => $this->coupon, 'created' => $this->created, 'customer' => $this->customer, 'deleted' => $this->deleted, 'expires' => $this->expires, 'id' => $this->id, 'labels' => $this->labels, 'payment' => $this->payment, 'tags' => $this->tags, 'updated' => $this->updated, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class Partial_Voucher extends Onslip360Object {
		/**
		 * @param string[]|null $identifiers
		 * @param int[]|null|Nil $labels
		 * @param string[]|null|Nil $tags
		*/
		function __construct(
			public Partial_CouponVoucher|null|Nil $coupon = null,
			public int|null|Nil $customer = null,
			public string|null|Nil $deleted = null,
			public string|null|Nil $expires = null,
			public array|null $identifiers = null,
			public array|null|Nil $labels = null,
			public Partial_PaymentVoucher|null|Nil $payment = null,
			public array|null|Nil $tags = null,
			public Voucher\Type|null $type = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ Partial_CouponVoucher::o($j['coupon'] ?? null), $j['customer'] ?? null, $j['deleted'] ?? null, $j['expires'] ?? null, $j['identifiers'] ?? null, $j['labels'] ?? null, Partial_PaymentVoucher::o($j['payment'] ?? null), $j['tags'] ?? null, static::e(Voucher\Type::from(...), $j['type'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'coupon' => $this->coupon, 'customer' => $this->customer, 'deleted' => $this->deleted, 'expires' => $this->expires, 'identifiers' => $this->identifiers, 'labels' => $this->labels, 'payment' => $this->payment, 'tags' => $this->tags, 'type' => $this->type ];
		}
	}

	class Stored_Voucher extends Onslip360Object {
		/**
		 * @param string[] $identifiers
		 * @param int[]|null $labels
		 * @param string[]|null $tags
		*/
		function __construct(
			public string $created,
			public int $id,
			public array $identifiers,
			public Voucher\Type $type,
			public string $updated,
			public CouponVoucher|null $coupon = null,
			public int|null $customer = null,
			public string|null $deleted = null,
			public string|null $expires = null,
			public array|null $labels = null,
			public PaymentVoucher|null $payment = null,
			public array|null $tags = null,
			public int|null $updatedBy = null,
			public int|null $updatedFrom = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['created'], $j['id'], $j['identifiers'], static::e(Voucher\Type::from(...), $j['type']), $j['updated'], CouponVoucher::o($j['coupon'] ?? null), $j['customer'] ?? null, $j['deleted'] ?? null, $j['expires'] ?? null, $j['labels'] ?? null, PaymentVoucher::o($j['payment'] ?? null), $j['tags'] ?? null, $j['updated-by'] ?? null, $j['updated-from'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'created' => $this->created, 'id' => $this->id, 'identifiers' => $this->identifiers, 'type' => $this->type, 'updated' => $this->updated, 'coupon' => $this->coupon, 'customer' => $this->customer, 'deleted' => $this->deleted, 'expires' => $this->expires, 'labels' => $this->labels, 'payment' => $this->payment, 'tags' => $this->tags, 'updated-by' => $this->updatedBy, 'updated-from' => $this->updatedFrom ];
		}
	}

	class VoucherTransaction extends Onslip360Object {
		function __construct(
			public float|null $amount = null,
			public string|null $expiration = null,
			public float|null $quantity = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['expiration'] ?? null, $j['quantity'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'expiration' => $this->expiration, 'quantity' => $this->quantity ];
		}
	}

	class Partial_VoucherTransaction extends Onslip360Object {
		function __construct(
			public float|null|Nil $amount = null,
			public string|null|Nil $expiration = null,
			public float|null|Nil $quantity = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['expiration'] ?? null, $j['quantity'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'expiration' => $this->expiration, 'quantity' => $this->quantity ];
		}
	}

	class VouchersReportActionParams extends Onslip360Object {
		function __construct(
			public bool $pageBreakItems,
			public bool $showEmpty,
			public bool|null $couponVouchers = null,
			public bool|null $vouchers = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['page-break-items'], $j['show-empty'], $j['coupon-vouchers'] ?? null, $j['vouchers'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'page-break-items' => $this->pageBreakItems, 'show-empty' => $this->showEmpty, 'coupon-vouchers' => $this->couponVouchers, 'vouchers' => $this->vouchers ];
		}
	}

	class Partial_VouchersReportActionParams extends Onslip360Object {
		function __construct(
			public bool|null|Nil $couponVouchers = null,
			public bool|null $pageBreakItems = null,
			public bool|null $showEmpty = null,
			public bool|null|Nil $vouchers = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['coupon-vouchers'] ?? null, $j['page-break-items'] ?? null, $j['show-empty'] ?? null, $j['vouchers'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'coupon-vouchers' => $this->couponVouchers, 'page-break-items' => $this->pageBreakItems, 'show-empty' => $this->showEmpty, 'vouchers' => $this->vouchers ];
		}
	}

	class WEIQ extends Onslip360Object {
		function __construct(
			public string $baseUri,
			public string $setupNotificationUri,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['base-uri'], $j['setup-notification-uri'] ];
		}

		protected function _toJson(): array {
			return [ 'base-uri' => $this->baseUri, 'setup-notification-uri' => $this->setupNotificationUri ];
		}
	}

	class Partial_WEIQ extends Onslip360Object {
		function __construct(
			public string|null $baseUri = null,
			public string|null $setupNotificationUri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['base-uri'] ?? null, $j['setup-notification-uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'base-uri' => $this->baseUri, 'setup-notification-uri' => $this->setupNotificationUri ];
		}
	}

	class WEIQCaptureRequest extends Onslip360Object {
		function __construct(
			public float $amount,
			public string $currency,
			public string $paymentReference,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'], $j['currency'], $j['payment-reference'] ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'currency' => $this->currency, 'payment-reference' => $this->paymentReference ];
		}
	}

	class Partial_WEIQCaptureRequest extends Onslip360Object {
		function __construct(
			public float|null $amount = null,
			public string|null $currency = null,
			public string|null $paymentReference = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['amount'] ?? null, $j['currency'] ?? null, $j['payment-reference'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'amount' => $this->amount, 'currency' => $this->currency, 'payment-reference' => $this->paymentReference ];
		}
	}

	class WebhookAction extends Onslip360Object {
		function __construct(
			public string $contentType,
			public string $endpointUri,
			public int|null $accessToken = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['content-type'], $j['endpoint-uri'], $j['access-token'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'content-type' => $this->contentType, 'endpoint-uri' => $this->endpointUri, 'access-token' => $this->accessToken ];
		}
	}

	class Partial_WebhookAction extends Onslip360Object {
		function __construct(
			public int|null|Nil $accessToken = null,
			public string|null $contentType = null,
			public string|null $endpointUri = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['access-token'] ?? null, $j['content-type'] ?? null, $j['endpoint-uri'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'access-token' => $this->accessToken, 'content-type' => $this->contentType, 'endpoint-uri' => $this->endpointUri ];
		}
	}

	class WebhookMessage extends Onslip360Object {
		function __construct(
			public string $companyAlias,
			public string $serviceEndpointUri,
			public int $trigger,
			public string $userAlias,
			public DataObjectOperation|null $dataObject = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['company-alias'], $j['service-endpoint-uri'], $j['trigger'], $j['user-alias'], DataObjectOperation::o($j['data-object'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'company-alias' => $this->companyAlias, 'service-endpoint-uri' => $this->serviceEndpointUri, 'trigger' => $this->trigger, 'user-alias' => $this->userAlias, 'data-object' => $this->dataObject ];
		}
	}

	class Partial_WebhookMessage extends Onslip360Object {
		function __construct(
			public string|null $companyAlias = null,
			public Partial_DataObjectOperation|null|Nil $dataObject = null,
			public string|null $serviceEndpointUri = null,
			public int|null $trigger = null,
			public string|null $userAlias = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['company-alias'] ?? null, Partial_DataObjectOperation::o($j['data-object'] ?? null), $j['service-endpoint-uri'] ?? null, $j['trigger'] ?? null, $j['user-alias'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'company-alias' => $this->companyAlias, 'data-object' => $this->dataObject, 'service-endpoint-uri' => $this->serviceEndpointUri, 'trigger' => $this->trigger, 'user-alias' => $this->userAlias ];
		}
	}

	class WelcomeEmailParams extends Onslip360Object {
		function __construct(
		) {}

		protected static function _fromJson(array $j): array {
			return [  ];
		}

		protected function _toJson(): array {
			return [  ];
		}
	}

	class Partial_WelcomeEmailParams extends Onslip360Object {
		function __construct(
		) {}

		protected static function _fromJson(array $j): array {
			return [  ];
		}

		protected function _toJson(): array {
			return [  ];
		}
	}

	class ZReportActionParams extends Onslip360Object {
		/**
		 * @param Stored_Record[]|null $records
		*/
		function __construct(
			public bool $mergeSieVerifications,
			public bool $sumAll,
			public bool $sumGratuity,
			public bool $sumLocations,
			public bool $sumTills,
			public array|null $records = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['merge-sie-verifications'], $j['sum-all'], $j['sum-gratuity'], $j['sum-locations'], $j['sum-tills'], Stored_Record::a($j['records'] ?? null) ];
		}

		protected function _toJson(): array {
			return [ 'merge-sie-verifications' => $this->mergeSieVerifications, 'sum-all' => $this->sumAll, 'sum-gratuity' => $this->sumGratuity, 'sum-locations' => $this->sumLocations, 'sum-tills' => $this->sumTills, 'records' => $this->records ];
		}
	}

	class Partial_ZReportActionParams extends Onslip360Object {
		/**
		 * @param Partial_Record[]|null|Nil $records
		*/
		function __construct(
			public bool|null $mergeSieVerifications = null,
			public array|null|Nil $records = null,
			public bool|null $sumAll = null,
			public bool|null $sumGratuity = null,
			public bool|null $sumLocations = null,
			public bool|null $sumTills = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['merge-sie-verifications'] ?? null, Partial_Record::a($j['records'] ?? null), $j['sum-all'] ?? null, $j['sum-gratuity'] ?? null, $j['sum-locations'] ?? null, $j['sum-tills'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'merge-sie-verifications' => $this->mergeSieVerifications, 'records' => $this->records, 'sum-all' => $this->sumAll, 'sum-gratuity' => $this->sumGratuity, 'sum-locations' => $this->sumLocations, 'sum-tills' => $this->sumTills ];
		}
	}

	class ZoinedActivation extends Onslip360Object {
		function __construct(
			public string $accessToken,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['access-token'] ];
		}

		protected function _toJson(): array {
			return [ 'access-token' => $this->accessToken ];
		}
	}

	class Partial_ZoinedActivation extends Onslip360Object {
		function __construct(
			public string|null $accessToken = null,
		) {}

		protected static function _fromJson(array $j): array {
			return [ $j['access-token'] ?? null ];
		}

		protected function _toJson(): array {
			return [ 'access-token' => $this->accessToken ];
		}
	}
}

namespace Onslip360 {
	class API extends AbstractAPI {
		function __construct(string $base, string $realm, string $id, string $key) {
			parent::__construct($base, $realm, $id, $key);
		}

		function activateERP(API\ERPActivation $erp): void {
			($this->request('POST', url('~$/erp', $this->realm()), $erp));
		}

		function addAccessToken(int $user, API\AccessToken $accessToken): API\Stored_AccessToken {
			return API\Stored_AccessToken::fromJson($this->request('POST', url('~$/users/$/access-tokens/', $this->realm(), $user), $accessToken));
		}

		function addAccessTokenCert(int $user, int $id, API\AccessTokenCert $cert): void {
			($this->request('POST', url('~$/users/$/access-tokens/$/cert', $this->realm(), $user, $id), $cert));
		}

		function addAccount(API\Account $account): API\Stored_Account {
			return API\Stored_Account::fromJson($this->request('POST', url('~$/accounts/', $this->realm()), $account));
		}

		function addButton(API\Button $button): API\Stored_Button {
			return API\Stored_Button::fromJson($this->request('POST', url('~$/buttons/', $this->realm()), $button));
		}

		function addButtonMap(API\ButtonMap $buttonMap): API\Stored_ButtonMap {
			return API\Stored_ButtonMap::fromJson($this->request('POST', url('~$/button-maps/', $this->realm()), $buttonMap));
		}

		function addCampaign(API\Campaign $campaign): API\Stored_Campaign {
			return API\Stored_Campaign::fromJson($this->request('POST', url('~$/campaigns/', $this->realm()), $campaign));
		}

		function addCert(API\Cert $cert): API\Stored_Cert {
			return API\Stored_Cert::fromJson($this->request('POST', url('~$/certificates/', $this->realm()), $cert));
		}

		function addCompany(API\Company $company): API\Stored_Company {
			return API\Stored_Company::fromJson($this->request('POST', url('companies/'), $company));
		}

		function addCustomer(API\Customer $customer): API\Stored_Customer {
			return API\Stored_Customer::fromJson($this->request('POST', url('~$/customers/', $this->realm()), $customer));
		}

		function addDMCampaign(API\DMCampaign $dMCampaign): API\Stored_DMCampaign {
			return API\Stored_DMCampaign::fromJson($this->request('POST', url('~$/dm-campaigns/', $this->realm()), $dMCampaign));
		}

		function addDigitalReceipt(int $recipient, API\DigitalReceipt $digitalReceipt): API\Stored_DigitalReceipt {
			return API\Stored_DigitalReceipt::fromJson($this->request('POST', url('digital-receipt-recipients/$/receipts/', $recipient), $digitalReceipt));
		}

		function addDigitalReceiptRecipient(API\DigitalReceiptRecipient $digitalReceiptRecipient): API\Stored_DigitalReceiptRecipient {
			return API\Stored_DigitalReceiptRecipient::fromJson($this->request('POST', url('digital-receipt-recipients/'), $digitalReceiptRecipient));
		}

		function addEventStream(API\EventStream $eventStream): API\Stored_EventStream {
			return API\Stored_EventStream::fromJson($this->request('POST', url('~$/event-streams', $this->realm()), $eventStream));
		}

		function addInventoryAdjustment(API\InventoryAdjustment $inventoryAdjustment): API\Stored_InventoryAdjustment {
			return API\Stored_InventoryAdjustment::fromJson($this->request('POST', url('~$/inventory-adjustments/', $this->realm()), $inventoryAdjustment));
		}

		function addLabel(API\Label $label): API\Stored_Label {
			return API\Stored_Label::fromJson($this->request('POST', url('~$/labels/', $this->realm()), $label));
		}

		function addLabelCategory(API\LabelCategory $labelCategory): API\Stored_LabelCategory {
			return API\Stored_LabelCategory::fromJson($this->request('POST', url('~$/label-categories/', $this->realm()), $labelCategory));
		}

		function addLocation(API\Location $location): API\Stored_Location {
			return API\Stored_Location::fromJson($this->request('POST', url('~$/locations/', $this->realm()), $location));
		}

		function addMerchant(API\Company $company): API\Stored_Company {
			return API\Stored_Company::fromJson($this->request('POST', url('~$/merchants', $this->realm()), $company));
		}

		function addOrder(API\Order $order): API\Stored_Order {
			return API\Stored_Order::fromJson($this->request('POST', url('~$/orders/', $this->realm()), $order));
		}

		function addPaymentMethod(API\PaymentMethod $paymentMethod): API\Stored_PaymentMethod {
			return API\Stored_PaymentMethod::fromJson($this->request('POST', url('~$/payment-methods/', $this->realm()), $paymentMethod));
		}

		function addPeripheral(API\Peripheral $peripheral): API\Stored_Peripheral {
			return API\Stored_Peripheral::fromJson($this->request('POST', url('~$/peripherals/', $this->realm()), $peripheral));
		}

		function addPrivPortToken(API\PrivPortToken $privPortToken): API\Stored_PrivPortToken {
			return API\Stored_PrivPortToken::fromJson($this->request('POST', url('priv-port-tokens/'), $privPortToken));
		}

		function addProduct(API\Product $product): API\Stored_Product {
			return API\Stored_Product::fromJson($this->request('POST', url('~$/products/', $this->realm()), $product));
		}

		function addProductGroup(API\ProductGroup $productGroup): API\Stored_ProductGroup {
			return API\Stored_ProductGroup::fromJson($this->request('POST', url('~$/product-groups/', $this->realm()), $productGroup));
		}

		function addProductModifier(API\ProductModifier $productModifier): API\Stored_ProductModifier {
			return API\Stored_ProductModifier::fromJson($this->request('POST', url('~$/product-modifiers/', $this->realm()), $productModifier));
		}

		function addRecord(int $client, API\Record $record): API\Stored_Record {
			return API\Stored_Record::fromJson($this->request('POST', url('~$/journal/$/', $this->realm(), $client), $record));
		}

		function addResource(API\Resource $resource): API\Stored_Resource {
			return API\Stored_Resource::fromJson($this->request('POST', url('~$/resources/', $this->realm()), $resource));
		}

		function addResourceMap(API\ResourceMap $resourceMap): API\Stored_ResourceMap {
			return API\Stored_ResourceMap::fromJson($this->request('POST', url('~$/resource-maps/', $this->realm()), $resourceMap));
		}

		function addRole(API\Role $role): API\Stored_Role {
			return API\Stored_Role::fromJson($this->request('POST', url('~$/roles/', $this->realm()), $role));
		}

		function addShift(int $location, API\Shift $shift): API\Stored_Shift {
			return API\Stored_Shift::fromJson($this->request('POST', url('~$/locations/$/shifts/', $this->realm(), $location), $shift));
		}

		function addShortURI(API\ShortURI $shortURI): API\Stored_ShortURI {
			return API\Stored_ShortURI::fromJson($this->request('POST', url('short-uris/'), $shortURI));
		}

		function addSwishTransaction(API\SwishTransaction $swishTransaction): API\Stored_SwishTransaction {
			return API\Stored_SwishTransaction::fromJson($this->request('POST', url('~$/swish/transactions/', $this->realm()), $swishTransaction));
		}

		function addTab(API\Tab $tab): API\Stored_Tab {
			return API\Stored_Tab::fromJson($this->request('POST', url('~$/tabs/', $this->realm()), $tab));
		}

		function addTill(API\Till $till): API\Stored_Till {
			return API\Stored_Till::fromJson($this->request('POST', url('~$/tills/', $this->realm()), $till));
		}

		function addTrigger(int $user, API\Trigger $trigger): API\Stored_Trigger {
			return API\Stored_Trigger::fromJson($this->request('POST', url('~$/users/$/triggers/', $this->realm(), $user), $trigger));
		}

		function addTriggerEvent(int $user, API\TriggerEvent $triggerEvent): API\Stored_TriggerEvent {
			return API\Stored_TriggerEvent::fromJson($this->request('POST', url('~$/users/$/trigger-events/', $this->realm(), $user), $triggerEvent));
		}

		function addUser(API\User $user): API\Stored_User {
			return API\Stored_User::fromJson($this->request('POST', url('~$/users/', $this->realm()), $user));
		}

		function addVoucher(API\Voucher $voucher): API\Stored_Voucher {
			return API\Stored_Voucher::fromJson($this->request('POST', url('~$/vouchers/', $this->realm()), $voucher));
		}

		function adjustStockBalance(int $location, int $id, API\StockBalanceTransaction $stockBalanceTransaction): API\Stored_StockBalance {
			return API\Stored_StockBalance::fromJson($this->request('POST', url('~$/locations/$/stock-balances/$', $this->realm(), $location, $id), $stockBalanceTransaction));
		}

		function cancelDMCampaign(int $id): void {
			($this->request('POST', url('~$/dm-campaigns/$/cancel', $this->realm(), $id), null));
		}

		function cancelTriggerEvent(int $user, int $id): void {
			($this->request('POST', url('~$/users/$/trigger-events/$/cancel', $this->realm(), $user, $id), null));
		}

		function captureWEIQPayment(API\WEIQCaptureRequest $req): API\Metadata {
			return API\Metadata::fromJson($this->request('POST', url('~$/payment-methods/weiq/capture', $this->realm()), $req));
		}

		function checkERPStatus(API\ERPAction\Type $type): void {
			($this->request('GET', url('~$/erp/$', $this->realm(), $type->value), null));
		}

		function checkServerEcho(API\EchoMessage $echoMessage): API\EchoMessage {
			return API\EchoMessage::fromJson($this->request('POST', url('health/echo'), $echoMessage));
		}

		function checkServerLiveness(): void {
			($this->request('GET', url('health/alive'), null));
		}

		function checkServerReadiness(): void {
			($this->request('GET', url('health/ready'), null));
		}

		function createReport(int $user, API\TriggerAction $triggerAction): API\Stored_TriggerEvent {
			return API\Stored_TriggerEvent::fromJson($this->request('POST', url('~$/users/$/reports/create', $this->realm(), $user), $triggerAction));
		}

		function deactivateERP(API\ERPAction\Type $type): void {
			($this->request('DELETE', url('~$/erp/$', $this->realm(), $type->value), null));
		}

		function doCommand(API\Command $command): void {
			($this->request('POST', url('~$', $this->realm()), $command));
		}

		function downloadClientInfoLocationCustomerScreenLogo(): API\DataStream {
			return API\DataStream::fromJson($this->request('GET', url('~$:location:customer-screen-logo', $this->realm()), null));
		}

		function downloadClientInfoLocationReceiptLogo(): API\DataStream {
			return API\DataStream::fromJson($this->request('GET', url('~$:location:receipt-logo', $this->realm()), null));
		}

		function downloadClientInfoLocationTakeOutConfigBanner(): API\DataStream {
			return API\DataStream::fromJson($this->request('GET', url('~$:location:take-out-config:banner', $this->realm()), null));
		}

		function downloadClientInfoLocationTakeOutConfigLogo(): API\DataStream {
			return API\DataStream::fromJson($this->request('GET', url('~$:location:take-out-config:logo', $this->realm()), null));
		}

		function downloadLocationCustomerScreenLogo(int $id): API\DataStream {
			return API\DataStream::fromJson($this->request('GET', url('~$/locations/$:customer-screen-logo', $this->realm(), $id), null));
		}

		function downloadLocationReceiptLogo(int $id): API\DataStream {
			return API\DataStream::fromJson($this->request('GET', url('~$/locations/$:receipt-logo', $this->realm(), $id), null));
		}

		function downloadLocationTakeOutConfigBanner(int $id): API\DataStream {
			return API\DataStream::fromJson($this->request('GET', url('~$/locations/$:take-out-config:banner', $this->realm(), $id), null));
		}

		function downloadLocationTakeOutConfigLogo(int $id): API\DataStream {
			return API\DataStream::fromJson($this->request('GET', url('~$/locations/$:take-out-config:logo', $this->realm(), $id), null));
		}

		function downloadTriggerEventResult(int $user, int $id): API\DataStream {
			return API\DataStream::fromJson($this->request('GET', url('~$/users/$/trigger-events/$:result', $this->realm(), $user, $id), null));
		}

		function generateAccessTokenCSR(int $user, int $id, API\CSRRequest $csrRequest): API\CSR {
			return API\CSR::fromJson($this->request('POST', url('~$/users/$/access-tokens/$/key', $this->realm(), $user, $id), $csrRequest));
		}

		function getAccessToken(int $user, int $id): API\Stored_AccessToken {
			return API\Stored_AccessToken::fromJson($this->request('GET', url('~$/users/$/access-tokens/$', $this->realm(), $user, $id), null));
		}

		function getAccessTokenCertStatus(int $user, int $id): API\PKCS12Status {
			return API\PKCS12Status::fromJson($this->request('GET', url('~$/users/$/access-tokens/$/cert', $this->realm(), $user, $id), null));
		}

		function getAccount(int $id): API\Stored_Account {
			return API\Stored_Account::fromJson($this->request('GET', url('~$/accounts/$', $this->realm(), $id), null));
		}

		function getButton(int $id): API\Stored_Button {
			return API\Stored_Button::fromJson($this->request('GET', url('~$/buttons/$', $this->realm(), $id), null));
		}

		function getButtonMap(int $id): API\Stored_ButtonMap {
			return API\Stored_ButtonMap::fromJson($this->request('GET', url('~$/button-maps/$', $this->realm(), $id), null));
		}

		function getCampaign(int $id): API\Stored_Campaign {
			return API\Stored_Campaign::fromJson($this->request('GET', url('~$/campaigns/$', $this->realm(), $id), null));
		}

		function getCert(int $id): API\Stored_Cert {
			return API\Stored_Cert::fromJson($this->request('GET', url('~$/certificates/$', $this->realm(), $id), null));
		}

		function getClientInfo(): API\ClientInfo {
			return API\ClientInfo::fromJson($this->request('GET', url('~$', $this->realm()), null));
		}

		function getCloudControlUnitStatus(int $id): API\CloudControlUnitStatus {
			return API\CloudControlUnitStatus::fromJson($this->request('GET', url('~$/tills/$/cloud-control-unit', $this->realm(), $id), null));
		}

		function getCompany(int $id): API\Stored_Company {
			return API\Stored_Company::fromJson($this->request('GET', url('companies/$', $id), null));
		}

		function getCompanyConfig(): API\Stored_CompanyConfig {
			return API\Stored_CompanyConfig::fromJson($this->request('GET', url('~$/config', $this->realm()), null));
		}

		function getCompanyInfo(): API\Stored_Company {
			return API\Stored_Company::fromJson($this->request('GET', url('~$/company', $this->realm()), null));
		}

		function getCompanySummary(int $id): API\Stored_CompanySummary {
			return API\Stored_CompanySummary::fromJson($this->request('GET', url('company-summaries/$', $id), null));
		}

		function getCustomer(int $id): API\Stored_Customer {
			return API\Stored_Customer::fromJson($this->request('GET', url('~$/customers/$', $this->realm(), $id), null));
		}

		function getCustomerInfo(string $tag): API\CustomerInfo {
			return API\CustomerInfo::fromJson($this->request('GET', url('~$/customer-info/$', $this->realm(), $tag), null));
		}

		function getDMCampaign(int $id): API\Stored_DMCampaign {
			return API\Stored_DMCampaign::fromJson($this->request('GET', url('~$/dm-campaigns/$', $this->realm(), $id), null));
		}

		function getDailyTillPassword(int $id): API\DailyTillPassword {
			return API\DailyTillPassword::fromJson($this->request('GET', url('~$/tills/$/daily-password', $this->realm(), $id), null));
		}

		function getDigitalReceipt(int $recipient, int $id): API\Stored_DigitalReceipt {
			return API\Stored_DigitalReceipt::fromJson($this->request('GET', url('digital-receipt-recipients/$/receipts/$', $recipient, $id), null));
		}

		function getDigitalReceiptRecipient(int $id): API\Stored_DigitalReceiptRecipient {
			return API\Stored_DigitalReceiptRecipient::fromJson($this->request('GET', url('digital-receipt-recipients/$', $id), null));
		}

		/**
		 * @return API\ERPAccount[]
		*/
		function getERPAccountList(API\ERPAction\Type $type): array {
			return API\ERPAccount::fromJsonArray($this->request('GET', url('~$/erp/$/accounts', $this->realm(), $type->value), null));
		}

		function getEventStream(string $id): API\Stored_EventStream {
			return API\Stored_EventStream::fromJson($this->request('GET', url('~$/event-streams/$', $this->realm(), $id), null));
		}

		function getInventoryAdjustment(int $id): API\Stored_InventoryAdjustment {
			return API\Stored_InventoryAdjustment::fromJson($this->request('GET', url('~$/inventory-adjustments/$', $this->realm(), $id), null));
		}

		function getLabel(int $id): API\Stored_Label {
			return API\Stored_Label::fromJson($this->request('GET', url('~$/labels/$', $this->realm(), $id), null));
		}

		function getLabelCategory(int $id): API\Stored_LabelCategory {
			return API\Stored_LabelCategory::fromJson($this->request('GET', url('~$/label-categories/$', $this->realm(), $id), null));
		}

		function getLocation(int $id): API\Stored_Location {
			return API\Stored_Location::fromJson($this->request('GET', url('~$/locations/$', $this->realm(), $id), null));
		}

		function getMQRecordSchedule(int $id): API\Stored_MQRecordSchedule {
			return API\Stored_MQRecordSchedule::fromJson($this->request('GET', url('mq-record-schedules/$', $id), null));
		}

		function getMerchant(string $alias): API\Stored_Company {
			return API\Stored_Company::fromJson($this->request('GET', url('~$/merchants/$', $this->realm(), $alias), null));
		}

		function getMerchantSummary(string $alias): API\Stored_CompanySummary {
			return API\Stored_CompanySummary::fromJson($this->request('GET', url('~$/merchant-summaries/$', $this->realm(), $alias), null));
		}

		function getOrder(int $id): API\Stored_Order {
			return API\Stored_Order::fromJson($this->request('GET', url('~$/orders/$', $this->realm(), $id), null));
		}

		function getPaymentMethod(int $id): API\Stored_PaymentMethod {
			return API\Stored_PaymentMethod::fromJson($this->request('GET', url('~$/payment-methods/$', $this->realm(), $id), null));
		}

		function getPeripheral(int $id): API\Stored_Peripheral {
			return API\Stored_Peripheral::fromJson($this->request('GET', url('~$/peripherals/$', $this->realm(), $id), null));
		}

		function getPrivPortToken(int $id): API\Stored_PrivPortToken {
			return API\Stored_PrivPortToken::fromJson($this->request('GET', url('priv-port-tokens/$', $id), null));
		}

		function getProduct(int $id): API\Stored_Product {
			return API\Stored_Product::fromJson($this->request('GET', url('~$/products/$', $this->realm(), $id), null));
		}

		function getProductGroup(int $id): API\Stored_ProductGroup {
			return API\Stored_ProductGroup::fromJson($this->request('GET', url('~$/product-groups/$', $this->realm(), $id), null));
		}

		function getProductModifier(int $id): API\Stored_ProductModifier {
			return API\Stored_ProductModifier::fromJson($this->request('GET', url('~$/product-modifiers/$', $this->realm(), $id), null));
		}

		function getRecord(int $client, int $id): API\Stored_Record {
			return API\Stored_Record::fromJson($this->request('GET', url('~$/journal/$/$', $this->realm(), $client, $id), null));
		}

		function getResource(int $id): API\Stored_Resource {
			return API\Stored_Resource::fromJson($this->request('GET', url('~$/resources/$', $this->realm(), $id), null));
		}

		function getResourceMap(int $id): API\Stored_ResourceMap {
			return API\Stored_ResourceMap::fromJson($this->request('GET', url('~$/resource-maps/$', $this->realm(), $id), null));
		}

		function getRole(int $id): API\Stored_Role {
			return API\Stored_Role::fromJson($this->request('GET', url('~$/roles/$', $this->realm(), $id), null));
		}

		function getShift(int $location, int $id): API\Stored_Shift {
			return API\Stored_Shift::fromJson($this->request('GET', url('~$/locations/$/shifts/$', $this->realm(), $location, $id), null));
		}

		function getShortURI(int $id): API\Stored_ShortURI {
			return API\Stored_ShortURI::fromJson($this->request('GET', url('short-uris/$', $id), null));
		}

		function getStockBalance(int $location, int $id): API\Stored_StockBalance {
			return API\Stored_StockBalance::fromJson($this->request('GET', url('~$/locations/$/stock-balances/$', $this->realm(), $location, $id), null));
		}

		function getSwishTransaction(int $id, bool|null $refresh = null): API\Stored_SwishTransaction {
			return API\Stored_SwishTransaction::fromJson($this->qp('refresh', $refresh)->request('GET', url('~$/swish/transactions/$', $this->realm(), $id), null));
		}

		function getSystemConfig(): API\Stored_SystemConfig {
			return API\Stored_SystemConfig::fromJson($this->request('GET', url('system-config'), null));
		}

		function getTab(int $id): API\Stored_Tab {
			return API\Stored_Tab::fromJson($this->request('GET', url('~$/tabs/$', $this->realm(), $id), null));
		}

		function getTakeOutStatus(int $location): API\TakeOutStatus {
			return API\TakeOutStatus::fromJson($this->request('GET', url('~$/locations/$/take-out-status', $this->realm(), $location), null));
		}

		function getTill(int $id): API\Stored_Till {
			return API\Stored_Till::fromJson($this->request('GET', url('~$/tills/$', $this->realm(), $id), null));
		}

		function getTillState(int $id): API\Stored_TillState {
			return API\Stored_TillState::fromJson($this->request('GET', url('~$/tills/$/state', $this->realm(), $id), null));
		}

		function getTrigger(int $user, int $id): API\Stored_Trigger {
			return API\Stored_Trigger::fromJson($this->request('GET', url('~$/users/$/triggers/$', $this->realm(), $user, $id), null));
		}

		function getTriggerEvent(int $user, int $id): API\Stored_TriggerEvent {
			return API\Stored_TriggerEvent::fromJson($this->request('GET', url('~$/users/$/trigger-events/$', $this->realm(), $user, $id), null));
		}

		function getUser(int $id): API\Stored_User {
			return API\Stored_User::fromJson($this->request('GET', url('~$/users/$', $this->realm(), $id), null));
		}

		function getVoucher(int $id): API\Stored_Voucher {
			return API\Stored_Voucher::fromJson($this->request('GET', url('~$/vouchers/$', $this->realm(), $id), null));
		}

		function inspectAccessToken(int $user, int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/users/$/access-tokens/$', $this->realm(), $user, $id), $report));
		}

		function inspectAccount(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/accounts/$', $this->realm(), $id), $report));
		}

		function inspectButton(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/buttons/$', $this->realm(), $id), $report));
		}

		function inspectButtonMap(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/button-maps/$', $this->realm(), $id), $report));
		}

		function inspectCampaign(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/campaigns/$', $this->realm(), $id), $report));
		}

		function inspectCert(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/certificates/$', $this->realm(), $id), $report));
		}

		function inspectCompany(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('companies/$', $id), $report));
		}

		function inspectCompanyConfig(API\InspectionRequest $report): void {
			($this->request('REPORT', url('~$/config', $this->realm()), $report));
		}

		function inspectCompanyInfo(API\InspectionRequest $report): void {
			($this->request('REPORT', url('~$/company', $this->realm()), $report));
		}

		function inspectCompanySummary(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('company-summaries/$', $id), $report));
		}

		function inspectCustomer(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/customers/$', $this->realm(), $id), $report));
		}

		function inspectDMCampaign(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/dm-campaigns/$', $this->realm(), $id), $report));
		}

		function inspectDigitalReceipt(int $recipient, int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('digital-receipt-recipients/$/receipts/$', $recipient, $id), $report));
		}

		function inspectDigitalReceiptRecipient(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('digital-receipt-recipients/$', $id), $report));
		}

		function inspectInventoryAdjustment(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/inventory-adjustments/$', $this->realm(), $id), $report));
		}

		function inspectLabel(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/labels/$', $this->realm(), $id), $report));
		}

		function inspectLabelCategory(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/label-categories/$', $this->realm(), $id), $report));
		}

		function inspectLocation(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/locations/$', $this->realm(), $id), $report));
		}

		function inspectMerchant(string $alias, API\InspectionRequest $report): void {
			($this->request('REPORT', url('~$/merchants/$', $this->realm(), $alias), $report));
		}

		function inspectMerchantSummary(string $alias, API\InspectionRequest $report): API\Stored_CompanySummary {
			return API\Stored_CompanySummary::fromJson($this->request('REPORT', url('~$/merchant-summaries/$', $this->realm(), $alias), $report));
		}

		function inspectOrder(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/orders/$', $this->realm(), $id), $report));
		}

		function inspectPaymentMethod(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/payment-methods/$', $this->realm(), $id), $report));
		}

		function inspectPeripheral(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/peripherals/$', $this->realm(), $id), $report));
		}

		function inspectPrivPortToken(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('priv-port-tokens/$', $id), $report));
		}

		function inspectProduct(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/products/$', $this->realm(), $id), $report));
		}

		function inspectProductGroup(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/product-groups/$', $this->realm(), $id), $report));
		}

		function inspectProductModifier(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/product-modifiers/$', $this->realm(), $id), $report));
		}

		function inspectRecord(int $client, int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/journal/$/$', $this->realm(), $client, $id), $report));
		}

		function inspectResource(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/resources/$', $this->realm(), $id), $report));
		}

		function inspectResourceMap(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/resource-maps/$', $this->realm(), $id), $report));
		}

		function inspectRole(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/roles/$', $this->realm(), $id), $report));
		}

		function inspectShift(int $location, int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/locations/$/shifts/$', $this->realm(), $location, $id), $report));
		}

		function inspectShortURI(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('short-uris/$', $id), $report));
		}

		function inspectStockBalance(int $location, int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/locations/$/stock-balances/$', $this->realm(), $location, $id), $report));
		}

		function inspectSwishTransaction(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/swish/transactions/$', $this->realm(), $id), $report));
		}

		function inspectSystemConfig(API\InspectionRequest $report): void {
			($this->request('REPORT', url('system-config'), $report));
		}

		function inspectTab(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/tabs/$', $this->realm(), $id), $report));
		}

		function inspectTill(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/tills/$', $this->realm(), $id), $report));
		}

		function inspectTillState(int $id, API\InspectionRequest $report): void {
			($this->request('REPORT', url('~$/tills/$/state', $this->realm(), $id), $report));
		}

		function inspectTrigger(int $user, int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/users/$/triggers/$', $this->realm(), $user, $id), $report));
		}

		function inspectTriggerEvent(int $user, int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/users/$/trigger-events/$', $this->realm(), $user, $id), $report));
		}

		function inspectUser(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/users/$', $this->realm(), $id), $report));
		}

		function inspectVoucher(int $id, API\InspectionRequest $report): API\Stored_DataObjectReport {
			return API\Stored_DataObjectReport::fromJson($this->request('REPORT', url('~$/vouchers/$', $this->realm(), $id), $report));
		}

		/**
		 * @return API\Stored_AccessToken[]
		*/
		function listAccessTokens(int $user, string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_AccessToken::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/users/$/access-tokens/', $this->realm(), $user), null));
		}

		/**
		 * @return API\Stored_Account[]
		*/
		function listAccounts(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Account::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/accounts/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_ButtonMap[]
		*/
		function listButtonMaps(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_ButtonMap::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/button-maps/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Button[]
		*/
		function listButtons(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Button::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/buttons/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Campaign[]
		*/
		function listCampaigns(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Campaign::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/campaigns/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Cert[]
		*/
		function listCerts(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Cert::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/certificates/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Company[]
		*/
		function listCompanies(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Company::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('companies/'), null));
		}

		/**
		 * @return API\Stored_CompanySummary[]
		*/
		function listCompanySummaries(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_CompanySummary::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('company-summaries/'), null));
		}

		/**
		 * @return API\Stored_Customer[]
		*/
		function listCustomers(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Customer::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/customers/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_DMCampaign[]
		*/
		function listDMCampaigns(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_DMCampaign::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/dm-campaigns/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_DigitalReceiptRecipient[]
		*/
		function listDigitalReceiptRecipients(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_DigitalReceiptRecipient::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('digital-receipt-recipients/'), null));
		}

		/**
		 * @return API\Stored_DigitalReceipt[]
		*/
		function listDigitalReceipts(int $recipient, string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_DigitalReceipt::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('digital-receipt-recipients/$/receipts/', $recipient), null));
		}

		/**
		 * @return API\Stored_EventStream[]
		*/
		function listEventStreams(): array {
			return API\Stored_EventStream::fromJsonArray($this->request('GET', url('~$/event-streams', $this->realm()), null));
		}

		/**
		 * @return API\Stored_InventoryAdjustment[]
		*/
		function listInventoryAdjustments(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_InventoryAdjustment::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/inventory-adjustments/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_LabelCategory[]
		*/
		function listLabelCategories(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_LabelCategory::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/label-categories/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Label[]
		*/
		function listLabels(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Label::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/labels/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Location[]
		*/
		function listLocations(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Location::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/locations/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_MQRecordSchedule[]
		*/
		function listMQRecordSchedules(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_MQRecordSchedule::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('mq-record-schedules'), null));
		}

		/**
		 * @return API\Stored_CompanySummary[]
		*/
		function listMerchantSummaries(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_CompanySummary::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/merchant-summaries', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Company[]
		*/
		function listMerchants(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Company::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/merchants', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Order[]
		*/
		function listOrders(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Order::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/orders/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_PaymentMethod[]
		*/
		function listPaymentMethods(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_PaymentMethod::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/payment-methods/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Peripheral[]
		*/
		function listPeripherals(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Peripheral::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/peripherals/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_PrivPortToken[]
		*/
		function listPrivPortTokens(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_PrivPortToken::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('priv-port-tokens/'), null));
		}

		/**
		 * @return API\Stored_ProductGroup[]
		*/
		function listProductGroups(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_ProductGroup::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/product-groups/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_ProductModifier[]
		*/
		function listProductModifiers(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_ProductModifier::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/product-modifiers/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Product[]
		*/
		function listProducts(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Product::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/products/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Record[]
		*/
		function listRecords(int $client, string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Record::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/journal/$/', $this->realm(), $client), null));
		}

		/**
		 * @return API\Stored_ResourceMap[]
		*/
		function listResourceMaps(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_ResourceMap::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/resource-maps/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Resource[]
		*/
		function listResources(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Resource::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/resources/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Role[]
		*/
		function listRoles(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Role::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/roles/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Shift[]
		*/
		function listShifts(int $location, string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Shift::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/locations/$/shifts/', $this->realm(), $location), null));
		}

		/**
		 * @return API\Stored_ShortURI[]
		*/
		function listShortURIs(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_ShortURI::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('short-uris/'), null));
		}

		/**
		 * @return API\Stored_StockBalance[]
		*/
		function listStockBalances(int $location, string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_StockBalance::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/locations/$/stock-balances/', $this->realm(), $location), null));
		}

		/**
		 * @return API\Stored_SwishTransaction[]
		*/
		function listSwishTransactions(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_SwishTransaction::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/swish/transactions/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Tab[]
		*/
		function listTabs(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Tab::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/tabs/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Till[]
		*/
		function listTills(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Till::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/tills/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_TriggerEvent[]
		*/
		function listTriggerEvents(int $user, string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_TriggerEvent::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/users/$/trigger-events/', $this->realm(), $user), null));
		}

		/**
		 * @return API\Stored_Trigger[]
		*/
		function listTriggers(int $user, string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Trigger::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/users/$/triggers/', $this->realm(), $user), null));
		}

		/**
		 * @return API\Stored_User[]
		*/
		function listUsers(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_User::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/users/', $this->realm()), null));
		}

		/**
		 * @return API\Stored_Voucher[]
		*/
		function listVouchers(string|null $query = null, string|null $sortField = null, int|null $offset = null, int|null $count = null, bool|null $deleted = null, string|null $queryLocale = null): array {
			return API\Stored_Voucher::fromJsonArray($this->qp('q', $query)->qp('s', $sortField)->qp('o', $offset)->qp('c', $count)->qp('d', $deleted)->qp('ql', $queryLocale)->request('GET', url('~$/vouchers/', $this->realm()), null));
		}

		function passwordResetChallenge(API\PasswordResetChallengeRequest $challenge): void {
			($this->request('POST', url('password-reset-challenge'), $challenge));
		}

		function pinReset(API\PinResetRequest $pin): void {
			($this->request('POST', url('~$/pin-reset', $this->realm()), $pin));
		}

		function pingSwish(API\SwishPingRequest $pingRequest): void {
			($this->request('POST', url('~$/swish/ping', $this->realm()), $pingRequest));
		}

		function previewReportAction(int $user, API\TriggerAction $triggerAction): API\ReportDefinition {
			return API\ReportDefinition::fromJson($this->request('POST', url('~$/users/$/reports/preview', $this->realm(), $user), $triggerAction));
		}

		function putAccessToken(int $user, int $id, API\AccessToken $accessToken): API\Stored_AccessToken {
			return API\Stored_AccessToken::fromJson($this->request('PUT', url('~$/users/$/access-tokens/$', $this->realm(), $user, $id), $accessToken));
		}

		function putAccount(int $id, API\Account $account): API\Stored_Account {
			return API\Stored_Account::fromJson($this->request('PUT', url('~$/accounts/$', $this->realm(), $id), $account));
		}

		function putButton(int $id, API\Button $button): API\Stored_Button {
			return API\Stored_Button::fromJson($this->request('PUT', url('~$/buttons/$', $this->realm(), $id), $button));
		}

		function putButtonMap(int $id, API\ButtonMap $buttonMap): API\Stored_ButtonMap {
			return API\Stored_ButtonMap::fromJson($this->request('PUT', url('~$/button-maps/$', $this->realm(), $id), $buttonMap));
		}

		function putCampaign(int $id, API\Campaign $campaign): API\Stored_Campaign {
			return API\Stored_Campaign::fromJson($this->request('PUT', url('~$/campaigns/$', $this->realm(), $id), $campaign));
		}

		function putCert(int $id, API\Cert $cert): API\Stored_Cert {
			return API\Stored_Cert::fromJson($this->request('PUT', url('~$/certificates/$', $this->realm(), $id), $cert));
		}

		function putCompany(int $id, API\Company $company): API\Stored_Company {
			return API\Stored_Company::fromJson($this->request('PUT', url('companies/$', $id), $company));
		}

		function putCompanyConfig(API\CompanyConfig $config): API\Stored_CompanyConfig {
			return API\Stored_CompanyConfig::fromJson($this->request('PUT', url('~$/config', $this->realm()), $config));
		}

		function putCompanySummary(int $id, API\CompanySummary $companySummary): API\Stored_CompanySummary {
			return API\Stored_CompanySummary::fromJson($this->request('PUT', url('company-summaries/$', $id), $companySummary));
		}

		function putCustomer(int $id, API\Customer $customer): API\Stored_Customer {
			return API\Stored_Customer::fromJson($this->request('PUT', url('~$/customers/$', $this->realm(), $id), $customer));
		}

		function putCustomerInfo(string $tag, API\CustomerInfo $info): API\CustomerInfo {
			return API\CustomerInfo::fromJson($this->request('PUT', url('~$/customer-info/$', $this->realm(), $tag), $info));
		}

		function putDMCampaign(int $id, API\DMCampaign $dMCampaign): API\Stored_DMCampaign {
			return API\Stored_DMCampaign::fromJson($this->request('PUT', url('~$/dm-campaigns/$', $this->realm(), $id), $dMCampaign));
		}

		function putDigitalReceipt(int $recipient, int $id, API\DigitalReceipt $digitalReceipt): API\Stored_DigitalReceipt {
			return API\Stored_DigitalReceipt::fromJson($this->request('PUT', url('digital-receipt-recipients/$/receipts/$', $recipient, $id), $digitalReceipt));
		}

		function putDigitalReceiptRecipient(int $id, API\DigitalReceiptRecipient $digitalReceiptRecipient): API\Stored_DigitalReceiptRecipient {
			return API\Stored_DigitalReceiptRecipient::fromJson($this->request('PUT', url('digital-receipt-recipients/$', $id), $digitalReceiptRecipient));
		}

		function putEventStream(string $id, API\EventStream $eventStream): API\Stored_EventStream {
			return API\Stored_EventStream::fromJson($this->request('PUT', url('~$/event-streams/$', $this->realm(), $id), $eventStream));
		}

		function putInventoryAdjustment(int $id, API\InventoryAdjustment $inventoryAdjustment): API\Stored_InventoryAdjustment {
			return API\Stored_InventoryAdjustment::fromJson($this->request('PUT', url('~$/inventory-adjustments/$', $this->realm(), $id), $inventoryAdjustment));
		}

		function putLabel(int $id, API\Label $label): API\Stored_Label {
			return API\Stored_Label::fromJson($this->request('PUT', url('~$/labels/$', $this->realm(), $id), $label));
		}

		function putLabelCategory(int $id, API\LabelCategory $labelCategory): API\Stored_LabelCategory {
			return API\Stored_LabelCategory::fromJson($this->request('PUT', url('~$/label-categories/$', $this->realm(), $id), $labelCategory));
		}

		function putLocation(int $id, API\Location $location): API\Stored_Location {
			return API\Stored_Location::fromJson($this->request('PUT', url('~$/locations/$', $this->realm(), $id), $location));
		}

		function putMQRecordSchedule(int $id, API\MQRecordSchedule $schedule): API\Stored_MQRecordSchedule {
			return API\Stored_MQRecordSchedule::fromJson($this->request('PUT', url('mq-record-schedules/$', $id), $schedule));
		}

		function putMerchant(string $alias, API\Company $company): API\Stored_Company {
			return API\Stored_Company::fromJson($this->request('PUT', url('~$/merchants/$', $this->realm(), $alias), $company));
		}

		function putOrder(int $id, API\Order $order): API\Stored_Order {
			return API\Stored_Order::fromJson($this->request('PUT', url('~$/orders/$', $this->realm(), $id), $order));
		}

		function putPaymentMethod(int $id, API\PaymentMethod $paymentMethod): API\Stored_PaymentMethod {
			return API\Stored_PaymentMethod::fromJson($this->request('PUT', url('~$/payment-methods/$', $this->realm(), $id), $paymentMethod));
		}

		function putPeripheral(int $id, API\Peripheral $peripheral): API\Stored_Peripheral {
			return API\Stored_Peripheral::fromJson($this->request('PUT', url('~$/peripherals/$', $this->realm(), $id), $peripheral));
		}

		function putPrivPortToken(int $id, API\PrivPortToken $privPortToken): API\Stored_PrivPortToken {
			return API\Stored_PrivPortToken::fromJson($this->request('PUT', url('priv-port-tokens/$', $id), $privPortToken));
		}

		function putProduct(int $id, API\Product $product): API\Stored_Product {
			return API\Stored_Product::fromJson($this->request('PUT', url('~$/products/$', $this->realm(), $id), $product));
		}

		function putProductGroup(int $id, API\ProductGroup $productGroup): API\Stored_ProductGroup {
			return API\Stored_ProductGroup::fromJson($this->request('PUT', url('~$/product-groups/$', $this->realm(), $id), $productGroup));
		}

		function putProductModifier(int $id, API\ProductModifier $productModifier): API\Stored_ProductModifier {
			return API\Stored_ProductModifier::fromJson($this->request('PUT', url('~$/product-modifiers/$', $this->realm(), $id), $productModifier));
		}

		function putRecord(int $client, int $id, API\Record $record): API\Stored_Record {
			return API\Stored_Record::fromJson($this->request('PUT', url('~$/journal/$/$', $this->realm(), $client, $id), $record));
		}

		function putResource(int $id, API\Resource $resource): API\Stored_Resource {
			return API\Stored_Resource::fromJson($this->request('PUT', url('~$/resources/$', $this->realm(), $id), $resource));
		}

		function putResourceMap(int $id, API\ResourceMap $resourceMap): API\Stored_ResourceMap {
			return API\Stored_ResourceMap::fromJson($this->request('PUT', url('~$/resource-maps/$', $this->realm(), $id), $resourceMap));
		}

		function putRole(int $id, API\Role $role): API\Stored_Role {
			return API\Stored_Role::fromJson($this->request('PUT', url('~$/roles/$', $this->realm(), $id), $role));
		}

		function putShift(int $location, int $id, API\Shift $shift): API\Stored_Shift {
			return API\Stored_Shift::fromJson($this->request('PUT', url('~$/locations/$/shifts/$', $this->realm(), $location, $id), $shift));
		}

		function putShortURI(int $id, API\ShortURI $shortURI): API\Stored_ShortURI {
			return API\Stored_ShortURI::fromJson($this->request('PUT', url('short-uris/$', $id), $shortURI));
		}

		function putStockBalance(int $location, int $id, API\StockBalance $stockBalance): API\Stored_StockBalance {
			return API\Stored_StockBalance::fromJson($this->request('PUT', url('~$/locations/$/stock-balances/$', $this->realm(), $location, $id), $stockBalance));
		}

		function putSwishTransaction(int $id, API\SwishTransaction $swishTransaction): API\Stored_SwishTransaction {
			return API\Stored_SwishTransaction::fromJson($this->request('PUT', url('~$/swish/transactions/$', $this->realm(), $id), $swishTransaction));
		}

		function putSystemConfig(API\SystemConfig $config): API\Stored_SystemConfig {
			return API\Stored_SystemConfig::fromJson($this->request('PUT', url('system-config'), $config));
		}

		function putTab(int $id, API\Tab $tab): API\Stored_Tab {
			return API\Stored_Tab::fromJson($this->request('PUT', url('~$/tabs/$', $this->realm(), $id), $tab));
		}

		function putTill(int $id, API\Till $till): API\Stored_Till {
			return API\Stored_Till::fromJson($this->request('PUT', url('~$/tills/$', $this->realm(), $id), $till));
		}

		function putTillState(int $id, API\TillState $state): API\Stored_TillState {
			return API\Stored_TillState::fromJson($this->request('PUT', url('~$/tills/$/state', $this->realm(), $id), $state));
		}

		function putTrigger(int $user, int $id, API\Trigger $trigger): API\Stored_Trigger {
			return API\Stored_Trigger::fromJson($this->request('PUT', url('~$/users/$/triggers/$', $this->realm(), $user, $id), $trigger));
		}

		function putTriggerEvent(int $user, int $id, API\TriggerEvent $triggerEvent): API\Stored_TriggerEvent {
			return API\Stored_TriggerEvent::fromJson($this->request('PUT', url('~$/users/$/trigger-events/$', $this->realm(), $user, $id), $triggerEvent));
		}

		function putUser(int $id, API\User $user): API\Stored_User {
			return API\Stored_User::fromJson($this->request('PUT', url('~$/users/$', $this->realm(), $id), $user));
		}

		function putVoucher(int $id, API\Voucher $voucher): API\Stored_Voucher {
			return API\Stored_Voucher::fromJson($this->request('PUT', url('~$/vouchers/$', $this->realm(), $id), $voucher));
		}

		function qrSwishTransaction(int $id, API\SwishQRRequest $qrRequest): API\SwishQRResponse {
			return API\SwishQRResponse::fromJson($this->request('POST', url('~$/swish/transactions/$/qr', $this->realm(), $id), $qrRequest));
		}

		function refundSwishTransaction(int $id, API\SwishRefundRequest $refundRequest): API\Stored_SwishTransaction {
			return API\Stored_SwishTransaction::fromJson($this->request('POST', url('~$/swish/transactions/$/refund', $this->realm(), $id), $refundRequest));
		}

		function regenerateAccessToken(int $user, int $id, API\KeySpecification $keySpecification): API\Stored_AccessToken {
			return API\Stored_AccessToken::fromJson($this->request('POST', url('~$/users/$/access-tokens/$', $this->realm(), $user, $id), $keySpecification));
		}

		function registerCloudControlUnit(int $id, API\CloudControlUnit $cloudControlUnit): API\CloudControlUnitStatus {
			return API\CloudControlUnitStatus::fromJson($this->request('POST', url('~$/tills/$/cloud-control-unit', $this->realm(), $id), $cloudControlUnit));
		}

		function registerCompany(API\CompanyRegistration $registration): void {
			($this->request('POST', url('companies/register'), $registration));
		}

		function removeAccessToken(int $user, int $id): void {
			($this->request('DELETE', url('~$/users/$/access-tokens/$', $this->realm(), $user, $id), null));
		}

		function removeAccount(int $id): void {
			($this->request('DELETE', url('~$/accounts/$', $this->realm(), $id), null));
		}

		function removeButton(int $id): void {
			($this->request('DELETE', url('~$/buttons/$', $this->realm(), $id), null));
		}

		function removeButtonMap(int $id): void {
			($this->request('DELETE', url('~$/button-maps/$', $this->realm(), $id), null));
		}

		function removeCampaign(int $id): void {
			($this->request('DELETE', url('~$/campaigns/$', $this->realm(), $id), null));
		}

		function removeCert(int $id): void {
			($this->request('DELETE', url('~$/certificates/$', $this->realm(), $id), null));
		}

		function removeCompany(int $id): void {
			($this->request('DELETE', url('companies/$', $id), null));
		}

		function removeCompanyConfig(): void {
			($this->request('DELETE', url('~$/config', $this->realm()), null));
		}

		function removeCompanySummary(int $id): void {
			($this->request('DELETE', url('company-summaries/$', $id), null));
		}

		function removeCustomer(int $id): void {
			($this->request('DELETE', url('~$/customers/$', $this->realm(), $id), null));
		}

		function removeDMCampaign(int $id): void {
			($this->request('DELETE', url('~$/dm-campaigns/$', $this->realm(), $id), null));
		}

		function removeDigitalReceipt(int $recipient, int $id): void {
			($this->request('DELETE', url('digital-receipt-recipients/$/receipts/$', $recipient, $id), null));
		}

		function removeDigitalReceiptRecipient(int $id): void {
			($this->request('DELETE', url('digital-receipt-recipients/$', $id), null));
		}

		function removeEventStream(string $id): void {
			($this->request('DELETE', url('~$/event-streams/$', $this->realm(), $id), null));
		}

		function removeInventoryAdjustment(int $id): void {
			($this->request('DELETE', url('~$/inventory-adjustments/$', $this->realm(), $id), null));
		}

		function removeLabel(int $id): void {
			($this->request('DELETE', url('~$/labels/$', $this->realm(), $id), null));
		}

		function removeLabelCategory(int $id): void {
			($this->request('DELETE', url('~$/label-categories/$', $this->realm(), $id), null));
		}

		function removeLocation(int $id): void {
			($this->request('DELETE', url('~$/locations/$', $this->realm(), $id), null));
		}

		function removeMQRecordSchedule(int $id): void {
			($this->request('DELETE', url('mq-record-schedules/$', $id), null));
		}

		function removeMerchant(string $alias): void {
			($this->request('DELETE', url('~$/merchants/$', $this->realm(), $alias), null));
		}

		function removeOrder(int $id): void {
			($this->request('DELETE', url('~$/orders/$', $this->realm(), $id), null));
		}

		function removePaymentMethod(int $id): void {
			($this->request('DELETE', url('~$/payment-methods/$', $this->realm(), $id), null));
		}

		function removePeripheral(int $id): void {
			($this->request('DELETE', url('~$/peripherals/$', $this->realm(), $id), null));
		}

		function removePrivPortToken(int $id): void {
			($this->request('DELETE', url('priv-port-tokens/$', $id), null));
		}

		function removeProduct(int $id): void {
			($this->request('DELETE', url('~$/products/$', $this->realm(), $id), null));
		}

		function removeProductGroup(int $id): void {
			($this->request('DELETE', url('~$/product-groups/$', $this->realm(), $id), null));
		}

		function removeProductModifier(int $id): void {
			($this->request('DELETE', url('~$/product-modifiers/$', $this->realm(), $id), null));
		}

		function removeRecord(int $client, int $id): void {
			($this->request('DELETE', url('~$/journal/$/$', $this->realm(), $client, $id), null));
		}

		function removeResource(int $id): void {
			($this->request('DELETE', url('~$/resources/$', $this->realm(), $id), null));
		}

		function removeResourceMap(int $id): void {
			($this->request('DELETE', url('~$/resource-maps/$', $this->realm(), $id), null));
		}

		function removeRole(int $id): void {
			($this->request('DELETE', url('~$/roles/$', $this->realm(), $id), null));
		}

		function removeShift(int $location, int $id): void {
			($this->request('DELETE', url('~$/locations/$/shifts/$', $this->realm(), $location, $id), null));
		}

		function removeShortURI(int $id): void {
			($this->request('DELETE', url('short-uris/$', $id), null));
		}

		function removeStockBalance(int $location, int $id): void {
			($this->request('DELETE', url('~$/locations/$/stock-balances/$', $this->realm(), $location, $id), null));
		}

		function removeSwishTransaction(int $id): void {
			($this->request('DELETE', url('~$/swish/transactions/$', $this->realm(), $id), null));
		}

		function removeSystemConfig(): void {
			($this->request('DELETE', url('system-config'), null));
		}

		function removeTab(int $id): void {
			($this->request('DELETE', url('~$/tabs/$', $this->realm(), $id), null));
		}

		function removeTill(int $id): void {
			($this->request('DELETE', url('~$/tills/$', $this->realm(), $id), null));
		}

		function removeTillState(int $id): void {
			($this->request('DELETE', url('~$/tills/$/state', $this->realm(), $id), null));
		}

		function removeTrigger(int $user, int $id): void {
			($this->request('DELETE', url('~$/users/$/triggers/$', $this->realm(), $user, $id), null));
		}

		function removeTriggerEvent(int $user, int $id): void {
			($this->request('DELETE', url('~$/users/$/trigger-events/$', $this->realm(), $user, $id), null));
		}

		function removeUser(int $id): void {
			($this->request('DELETE', url('~$/users/$', $this->realm(), $id), null));
		}

		function removeVoucher(int $id): void {
			($this->request('DELETE', url('~$/vouchers/$', $this->realm(), $id), null));
		}

		function requestSwishTransaction(API\SwishTransaction $swishTransaction): API\Stored_SwishTransaction {
			return API\Stored_SwishTransaction::fromJson($this->request('POST', url('~$/swish/transactions/sale', $this->realm()), $swishTransaction));
		}

		function retryTriggerEvent(int $user, int $id): void {
			($this->request('POST', url('~$/users/$/trigger-events/$/retry', $this->realm(), $user, $id), null));
		}

		function sendDMCampaign(int $id): void {
			($this->request('POST', url('~$/dm-campaigns/$/send', $this->realm(), $id), null));
		}

		function sendDigitalReceipt(API\Record $record): API\Stored_DigitalReceipt {
			return API\Stored_DigitalReceipt::fromJson($this->request('POST', url('~$/digital-receipt', $this->realm()), $record));
		}

		function sendEmail(API\SendEmailRequest $sendEmail): API\Stored_TriggerEvent {
			return API\Stored_TriggerEvent::fromJson($this->request('POST', url('send-email'), $sendEmail));
		}

		function signReceipt(int $id, API\Record $record): API\Stored_Record {
			return API\Stored_Record::fromJson($this->request('POST', url('~$/tills/$/cloud-control-unit/sign', $this->realm(), $id), $record));
		}

		function syncWEIQMenus(int $location): void {
			($this->request('POST', url('~$/locations/$/weiq/sync-menus', $this->realm(), $location), null));
		}

		function terminateCompany(API\TerminateCompanyRequest $terminateCompanyRequest): void {
			($this->request('POST', url('~$/company/terminate', $this->realm()), $terminateCompanyRequest));
		}

		function unlinkLocationCustomerScreenLogo(int $id): void {
			($this->request('DELETE', url('~$/locations/$:customer-screen-logo', $this->realm(), $id), null));
		}

		function unlinkLocationReceiptLogo(int $id): void {
			($this->request('DELETE', url('~$/locations/$:receipt-logo', $this->realm(), $id), null));
		}

		function unlinkLocationTakeOutConfigBanner(int $id): void {
			($this->request('DELETE', url('~$/locations/$:take-out-config:banner', $this->realm(), $id), null));
		}

		function unlinkLocationTakeOutConfigLogo(int $id): void {
			($this->request('DELETE', url('~$/locations/$:take-out-config:logo', $this->realm(), $id), null));
		}

		function unlinkTriggerEventResult(int $user, int $id): void {
			($this->request('DELETE', url('~$/users/$/trigger-events/$:result', $this->realm(), $user, $id), null));
		}

		function updateAccessToken(int $user, int $id, API\Partial_AccessToken $accessToken): API\Stored_AccessToken {
			return API\Stored_AccessToken::fromJson($this->request('PATCH', url('~$/users/$/access-tokens/$', $this->realm(), $user, $id), $accessToken));
		}

		function updateAccount(int $id, API\Partial_Account $account): API\Stored_Account {
			return API\Stored_Account::fromJson($this->request('PATCH', url('~$/accounts/$', $this->realm(), $id), $account));
		}

		function updateButton(int $id, API\Partial_Button $button): API\Stored_Button {
			return API\Stored_Button::fromJson($this->request('PATCH', url('~$/buttons/$', $this->realm(), $id), $button));
		}

		function updateButtonMap(int $id, API\Partial_ButtonMap $buttonMap): API\Stored_ButtonMap {
			return API\Stored_ButtonMap::fromJson($this->request('PATCH', url('~$/button-maps/$', $this->realm(), $id), $buttonMap));
		}

		function updateCampaign(int $id, API\Partial_Campaign $campaign): API\Stored_Campaign {
			return API\Stored_Campaign::fromJson($this->request('PATCH', url('~$/campaigns/$', $this->realm(), $id), $campaign));
		}

		function updateCert(int $id, API\Partial_Cert $cert): API\Stored_Cert {
			return API\Stored_Cert::fromJson($this->request('PATCH', url('~$/certificates/$', $this->realm(), $id), $cert));
		}

		function updateCompany(int $id, API\Partial_Company $company): API\Stored_Company {
			return API\Stored_Company::fromJson($this->request('PATCH', url('companies/$', $id), $company));
		}

		function updateCompanyConfig(API\CompanyConfig $config): API\Stored_CompanyConfig {
			return API\Stored_CompanyConfig::fromJson($this->request('PATCH', url('~$/config', $this->realm()), $config));
		}

		function updateCompanyInfo(API\Company $company): void {
			($this->request('PATCH', url('~$/company', $this->realm()), $company));
		}

		function updateCompanySummary(int $id, API\Partial_CompanySummary $companySummary): API\Stored_CompanySummary {
			return API\Stored_CompanySummary::fromJson($this->request('PATCH', url('company-summaries/$', $id), $companySummary));
		}

		function updateCustomer(int $id, API\Partial_Customer $customer): API\Stored_Customer {
			return API\Stored_Customer::fromJson($this->request('PATCH', url('~$/customers/$', $this->realm(), $id), $customer));
		}

		function updateCustomerInfo(string $tag, API\CustomerInfo $info): API\CustomerInfo {
			return API\CustomerInfo::fromJson($this->request('PATCH', url('~$/customer-info/$', $this->realm(), $tag), $info));
		}

		function updateDMCampaign(int $id, API\Partial_DMCampaign $dMCampaign): API\Stored_DMCampaign {
			return API\Stored_DMCampaign::fromJson($this->request('PATCH', url('~$/dm-campaigns/$', $this->realm(), $id), $dMCampaign));
		}

		function updateDigitalReceipt(int $recipient, int $id, API\Partial_DigitalReceipt $digitalReceipt): API\Stored_DigitalReceipt {
			return API\Stored_DigitalReceipt::fromJson($this->request('PATCH', url('digital-receipt-recipients/$/receipts/$', $recipient, $id), $digitalReceipt));
		}

		function updateDigitalReceiptRecipient(int $id, API\Partial_DigitalReceiptRecipient $digitalReceiptRecipient): API\Stored_DigitalReceiptRecipient {
			return API\Stored_DigitalReceiptRecipient::fromJson($this->request('PATCH', url('digital-receipt-recipients/$', $id), $digitalReceiptRecipient));
		}

		function updateEventStream(string $id, API\EventStream $eventStream): API\Stored_EventStream {
			return API\Stored_EventStream::fromJson($this->request('PATCH', url('~$/event-streams/$', $this->realm(), $id), $eventStream));
		}

		function updateInventoryAdjustment(int $id, API\Partial_InventoryAdjustment $inventoryAdjustment): API\Stored_InventoryAdjustment {
			return API\Stored_InventoryAdjustment::fromJson($this->request('PATCH', url('~$/inventory-adjustments/$', $this->realm(), $id), $inventoryAdjustment));
		}

		function updateLabel(int $id, API\Partial_Label $label): API\Stored_Label {
			return API\Stored_Label::fromJson($this->request('PATCH', url('~$/labels/$', $this->realm(), $id), $label));
		}

		function updateLabelCategory(int $id, API\Partial_LabelCategory $labelCategory): API\Stored_LabelCategory {
			return API\Stored_LabelCategory::fromJson($this->request('PATCH', url('~$/label-categories/$', $this->realm(), $id), $labelCategory));
		}

		function updateLocation(int $id, API\Partial_Location $location): API\Stored_Location {
			return API\Stored_Location::fromJson($this->request('PATCH', url('~$/locations/$', $this->realm(), $id), $location));
		}

		function updateMQRecordSchedule(int $id, API\MQRecordSchedule $schedule): API\Stored_MQRecordSchedule {
			return API\Stored_MQRecordSchedule::fromJson($this->request('PATCH', url('mq-record-schedules/$', $id), $schedule));
		}

		function updateMerchant(string $alias, API\Company $company): API\Stored_Company {
			return API\Stored_Company::fromJson($this->request('PATCH', url('~$/merchants/$', $this->realm(), $alias), $company));
		}

		function updateOrder(int $id, API\Partial_Order $order): API\Stored_Order {
			return API\Stored_Order::fromJson($this->request('PATCH', url('~$/orders/$', $this->realm(), $id), $order));
		}

		function updatePaymentMethod(int $id, API\Partial_PaymentMethod $paymentMethod): API\Stored_PaymentMethod {
			return API\Stored_PaymentMethod::fromJson($this->request('PATCH', url('~$/payment-methods/$', $this->realm(), $id), $paymentMethod));
		}

		function updatePeripheral(int $id, API\Partial_Peripheral $peripheral): API\Stored_Peripheral {
			return API\Stored_Peripheral::fromJson($this->request('PATCH', url('~$/peripherals/$', $this->realm(), $id), $peripheral));
		}

		function updatePrivPortToken(int $id, API\Partial_PrivPortToken $privPortToken): API\Stored_PrivPortToken {
			return API\Stored_PrivPortToken::fromJson($this->request('PATCH', url('priv-port-tokens/$', $id), $privPortToken));
		}

		function updateProduct(int $id, API\Partial_Product $product): API\Stored_Product {
			return API\Stored_Product::fromJson($this->request('PATCH', url('~$/products/$', $this->realm(), $id), $product));
		}

		function updateProductGroup(int $id, API\Partial_ProductGroup $productGroup): API\Stored_ProductGroup {
			return API\Stored_ProductGroup::fromJson($this->request('PATCH', url('~$/product-groups/$', $this->realm(), $id), $productGroup));
		}

		function updateProductModifier(int $id, API\Partial_ProductModifier $productModifier): API\Stored_ProductModifier {
			return API\Stored_ProductModifier::fromJson($this->request('PATCH', url('~$/product-modifiers/$', $this->realm(), $id), $productModifier));
		}

		function updateRecord(int $client, int $id, API\Partial_Record $record): API\Stored_Record {
			return API\Stored_Record::fromJson($this->request('PATCH', url('~$/journal/$/$', $this->realm(), $client, $id), $record));
		}

		function updateResource(int $id, API\Partial_Resource $resource): API\Stored_Resource {
			return API\Stored_Resource::fromJson($this->request('PATCH', url('~$/resources/$', $this->realm(), $id), $resource));
		}

		function updateResourceMap(int $id, API\Partial_ResourceMap $resourceMap): API\Stored_ResourceMap {
			return API\Stored_ResourceMap::fromJson($this->request('PATCH', url('~$/resource-maps/$', $this->realm(), $id), $resourceMap));
		}

		function updateRole(int $id, API\Partial_Role $role): API\Stored_Role {
			return API\Stored_Role::fromJson($this->request('PATCH', url('~$/roles/$', $this->realm(), $id), $role));
		}

		function updateShift(int $location, int $id, API\Partial_Shift $shift): API\Stored_Shift {
			return API\Stored_Shift::fromJson($this->request('PATCH', url('~$/locations/$/shifts/$', $this->realm(), $location, $id), $shift));
		}

		function updateShortURI(int $id, API\Partial_ShortURI $shortURI): API\Stored_ShortURI {
			return API\Stored_ShortURI::fromJson($this->request('PATCH', url('short-uris/$', $id), $shortURI));
		}

		function updateStockBalance(int $location, int $id, API\Partial_StockBalance $stockBalance): API\Stored_StockBalance {
			return API\Stored_StockBalance::fromJson($this->request('PATCH', url('~$/locations/$/stock-balances/$', $this->realm(), $location, $id), $stockBalance));
		}

		function updateSwishTransaction(int $id, API\Partial_SwishTransaction $swishTransaction): API\Stored_SwishTransaction {
			return API\Stored_SwishTransaction::fromJson($this->request('PATCH', url('~$/swish/transactions/$', $this->realm(), $id), $swishTransaction));
		}

		function updateSystemConfig(API\SystemConfig $config): API\Stored_SystemConfig {
			return API\Stored_SystemConfig::fromJson($this->request('PATCH', url('system-config'), $config));
		}

		function updateTab(int $id, API\Partial_Tab $tab): API\Stored_Tab {
			return API\Stored_Tab::fromJson($this->request('PATCH', url('~$/tabs/$', $this->realm(), $id), $tab));
		}

		function updateTill(int $id, API\Partial_Till $till): API\Stored_Till {
			return API\Stored_Till::fromJson($this->request('PATCH', url('~$/tills/$', $this->realm(), $id), $till));
		}

		function updateTillState(int $id, API\TillState $state): API\Stored_TillState {
			return API\Stored_TillState::fromJson($this->request('PATCH', url('~$/tills/$/state', $this->realm(), $id), $state));
		}

		function updateTrigger(int $user, int $id, API\Partial_Trigger $trigger): API\Stored_Trigger {
			return API\Stored_Trigger::fromJson($this->request('PATCH', url('~$/users/$/triggers/$', $this->realm(), $user, $id), $trigger));
		}

		function updateTriggerEvent(int $user, int $id, API\Partial_TriggerEvent $triggerEvent): API\Stored_TriggerEvent {
			return API\Stored_TriggerEvent::fromJson($this->request('PATCH', url('~$/users/$/trigger-events/$', $this->realm(), $user, $id), $triggerEvent));
		}

		function updateUser(int $id, API\Partial_User $user): API\Stored_User {
			return API\Stored_User::fromJson($this->request('PATCH', url('~$/users/$', $this->realm(), $id), $user));
		}

		function updateVoucher(int $id, API\Partial_Voucher $voucher): API\Stored_Voucher {
			return API\Stored_Voucher::fromJson($this->request('PATCH', url('~$/vouchers/$', $this->realm(), $id), $voucher));
		}

		function updateVoucherBalance(int $id, API\VoucherTransaction $voucherTransaction): API\Metadata {
			return API\Metadata::fromJson($this->request('POST', url('~$/vouchers/$', $this->realm(), $id), $voucherTransaction));
		}

		function uploadLocationCustomerScreenLogo(int $id, API\DataStream $dataStream): void {
			($this->request('PUT', url('~$/locations/$:customer-screen-logo', $this->realm(), $id), $dataStream));
		}

		function uploadLocationReceiptLogo(int $id, API\DataStream $dataStream): void {
			($this->request('PUT', url('~$/locations/$:receipt-logo', $this->realm(), $id), $dataStream));
		}

		function uploadLocationTakeOutConfigBanner(int $id, API\DataStream $dataStream): void {
			($this->request('PUT', url('~$/locations/$:take-out-config:banner', $this->realm(), $id), $dataStream));
		}

		function uploadLocationTakeOutConfigLogo(int $id, API\DataStream $dataStream): void {
			($this->request('PUT', url('~$/locations/$:take-out-config:logo', $this->realm(), $id), $dataStream));
		}

		function uploadTriggerEventResult(int $user, int $id, API\DataStream $dataStream): void {
			($this->request('PUT', url('~$/users/$/trigger-events/$:result', $this->realm(), $user, $id), $dataStream));
		}
	}
}
