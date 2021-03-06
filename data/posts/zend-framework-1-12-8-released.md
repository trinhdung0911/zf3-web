---
layout: post
title: Zend Framework 1.12.8 Released!
date: 2014-08-26T18:30:00Z
update: 2014-09-04T23:10:00Z
author: Matthew Weier O'Phinney
url_author: https://mwop.net/
permalink: /blog/zend-framework-1-12-8-released.html
categories:
- blog
- released

---

 The Zend Framework community is pleased to announce the immediate availability of Zend Framework 1.12.8!

- [http://framework.zend.com/downloads/latest#ZF1](/downloads/latest#ZF1)

 This is a maintenance release.

Notable Changes
---------------

- [\#418](https://github.com/zendframework/zf1/pull/418) Improved regex for SQL group, order, from statement. This is an improvement of the Security Advisory [ZF2014-04](http://framework.zend.com/security/advisory/ZF2014-04), to prevent potential SQL injection. This PR that can be a potential BC break for complex SQL code. See below for more information.
- [\#360](https://github.com/zendframework/zf1/pull/360) updates Zend\_Locale to use [CLDR](http://cldr.unicode.org) version 25.
- [\#98](https://github.com/zendframework/zf1/pull/98) allows editing and flattening of text form fields within PDF documents.
- [\#375](https://github.com/zendframework/zf1/pull/375) implements Zend\_Pdf::setJavascript(), Zend\_Pdf::addJavascript() and Zend\_Pdf::resetJavaScript().
- [\#414](https://github.com/zendframework/zf1/pull/414) adds the Microsoft\_Console component from the Windows Azure SDK for PHP into the Zend\_Service\_Console component, ensuring that WindowsAzure command line functionality included in the framework can now work.
- [\#385](https://github.com/zendframework/zf1/pull/385) adds support for DateTime fractional seconds under PHP 5.6+.
- [\#382](https://github.com/zendframework/zf1/pull/382) ensures that orphaned metadata cache files are removed when Zend\_Cache::CLEANING\_MODE\_ALL is used.
- [\#410](https://github.com/zendframework/zf1/pull/410) ensures that calls to reset the status of the libxml entity loader happen as soon as possible, to prevent potential threading issues under php-fpm (since the settings are per process, not per-request, in that environment).

See [the changelog](http://framework.zend.com/changelog/1.12.8) for full details.

Potential BC break
------------------

The PR [\#418](https://github.com/zendframework/zf1/pull/418) can introduces potential BC break in presence of complex SQL statements (for instance using SQL sub-functions).

To fix this you can use **Zend\_Db\_Expr()** in the group(), order() or from() functions, if your SQL code doesn't work after the upgrade to ZF 1.12.8.

Thank You!
----------

 As always, I'd like to thank the many contributors who made this release possible!

#### Updates

- 2014-09-04: Added section on potential BC break.
