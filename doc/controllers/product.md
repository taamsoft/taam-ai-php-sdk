# Product

```php
$productController = $client->getProductController();
```

## Class Name

`ProductController`

## Methods

* [User Productd](../../doc/controllers/product.md#user-productd)
* [Trashed Products](../../doc/controllers/product.md#trashed-products)
* [Create Product](../../doc/controllers/product.md#create-product)
* [Delete Product](../../doc/controllers/product.md#delete-product)
* [Restore Product](../../doc/controllers/product.md#restore-product)
* [Parmenent Delete Product](../../doc/controllers/product.md#parmenent-delete-product)
* [Update Product](../../doc/controllers/product.md#update-product)


# User Productd

```php
function userProductd(int $userId): UserProductd
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |

## Response Type

[`UserProductd`](../../doc/models/user-productd.md)

## Example Usage

```php
$userId = 1;

$result = $productController->userProductd($userId);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data fateched Successfully",
  "data": [
    {
      "id": 4,
      "user_id": 1,
      "name": "Programming new",
      "description": "Get your code",
      "feature_image": "assets/product_feature/64a71a7d35b1c_image.png",
      "bullet_points": "55",
      "target_audience": "55",
      "tags": "[\"sdffddf\",\"dfgfhjhk\",\"dfghjk\"]",
      "deleted_at": null
    },
    {
      "id": 5,
      "user_id": 11,
      "name": "shahzaman",
      "description": "detail about shahzaman",
      "feature_image": null,
      "bullet_points": "55",
      "target_audience": "55",
      "tags": null,
      "deleted_at": null
    },
    {
      "id": 6,
      "user_id": 0,
      "name": "MATGARLI SAAS",
      "description": "matgarli saas applcation help the vendors to  create online store in one click , the veondors can sell any kind of products",
      "feature_image": "https://www.taamfly.com/assets/empty.jpg",
      "bullet_points": "55",
      "target_audience": "vendors , sellers",
      "tags": "[\"vendors\",\"sellers\"]",
      "deleted_at": null
    },
    {
      "id": 7,
      "user_id": 0,
      "name": "asdas",
      "description": "sdfsdfsd",
      "feature_image": "https://taamfly.com/assets/empty.jpg",
      "bullet_points": "1321",
      "target_audience": "dfdsgsd",
      "tags": "[\"asdas\"]",
      "deleted_at": null
    },
    {
      "id": 8,
      "user_id": 0,
      "name": "new",
      "description": "new",
      "feature_image": "https://taamfly.com/assets/empty.jpg",
      "bullet_points": "32321",
      "target_audience": "dfdsgsd",
      "tags": "[\"asd\"]",
      "deleted_at": null
    },
    {
      "id": 9,
      "user_id": 1,
      "name": "truth smokeshop and vape",
      "description": "The top smoke shop and vapes and the best customer support. Shop for bongs, dab rigs, hand pipes, vaporizers and other smoking accessories.",
      "feature_image": "assets/product_feature/64b89f965465f_Truth.png",
      "bullet_points": "asdas",
      "target_audience": "all",
      "tags": "[\"vapes\",\"tobacco\"]",
      "deleted_at": null
    }
  ]
}
```


# Trashed Products

```php
function trashedProducts(int $userId): TrashedProducts
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |

## Response Type

[`TrashedProducts`](../../doc/models/trashed-products.md)

## Example Usage

```php
$userId = 1;

$result = $productController->trashedProducts($userId);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Data fateched Successfully",
  "data": [
    {
      "id": 10,
      "user_id": 1,
      "name": "New Product",
      "description": "THis is testing",
      "feature_image": "http://127.0.0.1:8000/assets/empty.jpg",
      "bullet_points": "friend",
      "target_audience": "males",
      "tags": "null",
      "deleted_at": "2023-09-30T08:18:41.000000Z"
    }
  ]
}
```


# Create Product

```php
function createProduct(
    int $userId,
    string $name,
    string $description,
    string $bulletPoints,
    string $targetAudience,
    string $tags0,
    string $tags1
): CreateProduct
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Form, Required | - |
| `name` | `string` | Form, Required | - |
| `description` | `string` | Form, Required | - |
| `bulletPoints` | `string` | Form, Required | - |
| `targetAudience` | `string` | Form, Required | - |
| `tags0` | `string` | Form, Required | - |
| `tags1` | `string` | Form, Required | - |

## Response Type

[`CreateProduct`](../../doc/models/create-product.md)

## Example Usage

```php
$userId = 1;

$name = 'New Product';

$description = 'THis is testing';

$bulletPoints = 'friend';

$targetAudience = 'males';

Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')$result = $productController->createProduct(
    $userId,
    $name,
    $description,
    $bulletPoints,
    $targetAudience,
    $tags0,
    $tags1
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Product Created Successfully"
}
```


# Delete Product

```php
function deleteProduct(int $userId, int $productId): DeleteProduct
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `productId` | `int` | Query, Required | - |

## Response Type

[`DeleteProduct`](../../doc/models/delete-product.md)

## Example Usage

```php
$userId = 1;

$productId = 10;

$result = $productController->deleteProduct(
    $userId,
    $productId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Product Deleted Successfully"
}
```


# Restore Product

```php
function restoreProduct(int $userId, int $productId): RestoreProduct
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `productId` | `int` | Query, Required | - |

## Response Type

[`RestoreProduct`](../../doc/models/restore-product.md)

## Example Usage

```php
$userId = 1;

$productId = 10;

$result = $productController->restoreProduct(
    $userId,
    $productId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Product Restored Successfully"
}
```


# Parmenent Delete Product

```php
function parmenentDeleteProduct(int $userId, int $productId): NewRequest1
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `productId` | `int` | Query, Required | - |

## Response Type

[`NewRequest1`](../../doc/models/new-request-1.md)

## Example Usage

```php
$userId = 1;

$productId = 10;

$result = $productController->parmenentDeleteProduct(
    $userId,
    $productId
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Product Deleted Permanently"
}
```


# Update Product

```php
function updateProduct(
    int $userId,
    int $productId,
    string $name,
    string $description,
    int $bulletPoints,
    string $targetAudience,
    string $tags0
): UpdateProduct
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |
| `productId` | `int` | Query, Required | - |
| `name` | `string` | Query, Required | - |
| `description` | `string` | Query, Required | - |
| `bulletPoints` | `int` | Query, Required | - |
| `targetAudience` | `string` | Query, Required | - |
| `tags0` | `string` | Query, Required | - |

## Response Type

[`UpdateProduct`](../../doc/models/update-product.md)

## Example Usage

```php
$userId = 1;

$productId = 11;

$name = 'updated';

$description = 'updated';

$bulletPoints = 11;

$targetAudience = 'females';

Liquid error: Value cannot be null. (Parameter 'key')$result = $productController->updateProduct(
    $userId,
    $productId,
    $name,
    $description,
    $bulletPoints,
    $targetAudience,
    $tags0
);
```

## Example Response *(as JSON)*

```json
{
  "status": "success",
  "message": "Product Updated Successfully"
}
```

