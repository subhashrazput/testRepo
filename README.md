The purpose of this repository is to provide sample code to interact with phonepe server.
# Prerequisites
- php
- pecl_http-1.7.6

# Examples

## How to set credetials?
```php
<?php
require "credentials.php";
require "phonepe_server.php";

$c = new Credentials("mid", "salt_key", "salt_index", null, null);
```
### Create phonepe sdk object
```php
$phonepe = new PhonePeServer($c);
```

### SSO Flow

- GRANT_TOKEN using <a href = "https://developer.phonepe.com/v4/reference#fetchauthtoken"> Phonepe JS-SDK </a>



```php

#Step 1: Fetch auth token
response = phonepe->fetch_auth_token("GRANT_TOKEN")

#Step2: Get user details.
if response["success"]:
    user_details = phonepe.get_user_details(response["data"]["accessToken"])
```

### Payment Flow
#### With Phonepe JS-SDK
```php
#Step 1: Initiate transaction by passing valid parameters.
phonepe->initiate_transaction("call_back_url", "transaction_id", amount, valid_for, "merchant_order_id", transaction_context)
```
#### Without Phonepe JS-SDK
```php
phonepe->initiate_transaction_sdk_less("call_back_url", "transaction_id", amount, valid_for, "merchant_order_id", transaction_context)
```

### Get the transaction Status
```php
phonepe->get_transaction_status("transaction_id")
```
### Back to Source
```php
phonepe->back_to_source(provided_reference_id, transaction_id,merchant_order_id,amount, message)
```
### S2S Call Back

Implement a callback endpoint. <a href = "https://developer.phonepe.com/v4/reference#s2s-call-back-1">More Info </a>
#### Get response by passing x-verify and phonepe response.
```php
phonepe->s2s_callback(x_verify, response)
```
"# SUBASH " 
