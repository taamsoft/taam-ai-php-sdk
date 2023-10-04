# Misc

```php
$miscController = $client->getMiscController();
```

## Class Name

`MiscController`

## Methods

* [All Categories](../../doc/controllers/misc.md#all-categories)
* [New Request](../../doc/controllers/misc.md#new-request)


# All Categories

```php
function allCategories(int $userId): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `userId` | `int` | Query, Required | - |

## Response Type

`void`

## Example Usage

```php
$userId = 40;

$miscController->allCategories($userId);
```


# New Request

```php
function newRequest(): void
```

## Response Type

`void`

## Example Usage

```php
$miscController->newRequest();
```

