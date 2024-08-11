<?php

// Require PHPMailer
require 'libs/PHPMailer/src/Exception.php';
require 'libs/PHPMailer/src/PHPMailer.php';
require 'libs/PHPMailer/src/SMTP.php';

// Require validation
require 'libs/validation/src/Traits/TranslationsTrait.php';
require 'libs/validation/src/Traits/MessagesTrait.php';
require 'libs/validation/src/Rules/Traits/DateUtilsTrait.php';
require 'libs/validation/src/Rules/Traits/FileTrait.php';
require 'libs/validation/src/Rules/Traits/SizeTrait.php';

require 'libs/validation/src/Rules/Interfaces/BeforeValidate.php';
require 'libs/validation/src/Rules/Interfaces/ModifyValue.php';

require 'libs/validation/src/Rule.php';

require 'libs/validation/src/Rules/Required.php';
require 'libs/validation/src/Rules/RequiredIf.php';
require 'libs/validation/src/Rules/RequiredUnless.php';
require 'libs/validation/src/Rules/RequiredWith.php';
require 'libs/validation/src/Rules/RequiredWithout.php';
require 'libs/validation/src/Rules/RequiredWithAll.php';
require 'libs/validation/src/Rules/RequiredWithoutAll.php';
require 'libs/validation/src/Rules/Email.php';
require 'libs/validation/src/Rules/Alpha.php';
require 'libs/validation/src/Rules/Numeric.php';
require 'libs/validation/src/Rules/AlphaNum.php';
require 'libs/validation/src/Rules/AlphaDash.php';
require 'libs/validation/src/Rules/AlphaSpaces.php';
require 'libs/validation/src/Rules/In.php';
require 'libs/validation/src/Rules/NotIn.php';
require 'libs/validation/src/Rules/Min.php';
require 'libs/validation/src/Rules/Max.php';
require 'libs/validation/src/Rules/Between.php';
require 'libs/validation/src/Rules/Url.php';
require 'libs/validation/src/Rules/Integer.php';
require 'libs/validation/src/Rules/Boolean.php';
require 'libs/validation/src/Rules/Ip.php';
require 'libs/validation/src/Rules/Ipv4.php';
require 'libs/validation/src/Rules/Ipv6.php';
require 'libs/validation/src/Rules/Extension.php';
require 'libs/validation/src/Rules/TypeArray.php';
require 'libs/validation/src/Rules/Same.php';
require 'libs/validation/src/Rules/Regex.php';
require 'libs/validation/src/Rules/Date.php';
require 'libs/validation/src/Rules/Accepted.php';
require 'libs/validation/src/Rules/Present.php';
require 'libs/validation/src/Rules/Different.php';
require 'libs/validation/src/Rules/UploadedFile.php';
require 'libs/validation/src/Rules/Mimes.php';
require 'libs/validation/src/Rules/Callback.php';
require 'libs/validation/src/Rules/Before.php';
require 'libs/validation/src/Rules/After.php';
require 'libs/validation/src/Rules/Lowercase.php';
require 'libs/validation/src/Rules/Uppercase.php';
require 'libs/validation/src/Rules/Json.php';
require 'libs/validation/src/Rules/Digits.php';
require 'libs/validation/src/Rules/DigitsBetween.php';
require 'libs/validation/src/Rules/Defaults.php';
require 'libs/validation/src/Rules/Nullable.php';

require 'libs/validation/src/Validator.php';
require 'libs/validation/src/Validation.php';
require 'libs/validation/src/ErrorBag.php';
require 'libs/validation/src/RuleNotFoundException.php';
require 'libs/validation/src/Attribute.php';
require 'libs/validation/src/Helper.php';
