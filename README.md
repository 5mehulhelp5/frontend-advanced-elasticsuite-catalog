# Magento 2 Advanced Elastisuite Catalog Module
Magento 2 module enhancing ElasticSuite Catalog features for Vira Theme.
Adds smart ajax filtering, with dynamic pagination.

## Key Features
- Multiple filtering without page reloads based on Alpine.js
- Multiselect Ajax Swatches
- Dynamic update sliders of any type
- Also works on catalog search


## Installation

```
composer require magexperts/frontend-advanced-elasticsuite-catalog
```

## Admin Configurations
### General
- Active: Yes/No
### Slider Configuration
Direct Mode Active: Yes/No

>[!TIP]
> If you have Varnish Cache issue - update sub vcl_hash in your varnish VCL by adding code below
```
 # To make sure XMLHttp calls have their own cache
    if (req.http.X-Requested-With) {
        hash_data(req.http.X-Requested-With);
    }
```
