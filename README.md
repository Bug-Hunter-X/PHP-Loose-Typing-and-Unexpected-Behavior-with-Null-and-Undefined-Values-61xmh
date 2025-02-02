# PHP Loose Typing and Unexpected Behavior with Null and Undefined Values

This repository demonstrates a common issue in PHP related to its loose typing system. Specifically, it showcases how the improper handling of `null` and `undefined` values can result in unexpected behavior, particularly when using type coercion.

## Bug Description
The provided PHP code has a function that intends to handle both `null` and potentially `undefined` inputs. However, its type handling is insufficient, resulting in `NaN` for `undefined` instead of a designed default.