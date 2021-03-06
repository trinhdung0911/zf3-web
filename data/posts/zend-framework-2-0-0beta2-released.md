---
layout: post
title: Zend Framework 2.0.0beta2 Released!
date: 2011-12-20T21:30:00Z
update: 2011-12-20T21:30:00Z
author: Matthew Weier O'Phinney
url_author: https://mwop.net/
permalink: /blog/zend-framework-2-0-0beta2-released.html
categories:
- blog
- released

---

 The Zend Framework community is pleased to announce the immediate availability of Zend Framework 2.0.0beta2. Packages and installation instructions are available at:

- <http://packages.zendframework.com/>

 This is the second in a series of planned beta releases. The beta release cycle is following the "gmail" style of betas, whereby new features will be added in each new release, and BC will not be guaranteed; beta releases will happen _approximately_ every six weeks. The desire is for developers to adopt and work with new components as they are shipped, and provide feedback so we can polish the distribution.

 Once all code in the proposed [standard distribution](http://framework.zend.com/wiki/pages/viewpage.action?pageId=43745438) has reached maturity and reasonable stability, we will freeze the API and prepare for Release Candidate status.

 Featured components and functionality of 2.0.0beta2 include:

- **Refactored Mail component**
  - The Storage API has been left intact, though several classes and interfaces were shuffled around.
  - Zend\\Mail\\Mail was renamed to Zend\\Mail\\Message; it now encapsulates a mail message and all headers. MIME messages are created by attaching a Zend\\Mime\\Message object as the mail message body
  - Added Zend\\Mail\\Address and Zend\\Mail\\AddressList, used to represent single addresses and address collections, particularly within mail headers
  - Added Zend\\Mail\\Header\\\* and Zend\\Mail\\Headers, representations of mail headers.
  - A new Zend\\Mail\\Transport interface defines simply `send(Message $message)`. The SMTP, File, and Sendmail transports were rewritten to consume Message objects, and to introduce Options classes.
- **Refactored Cache component**
  - Completely rewritten component.
  - New API features storage adapters and adapter plugins for implementing cache storage and features such as serialization, clearing, and optimizing.
  - Current adapters include filesystem, APC, memcached, and memory.
  - All adapters can describe capabilities.
  - Plugins are implemented as event listeners.
  - A new "Pattern" API was created to simplify things like method, class, object, and output caching.
- **MVC updates**
  - Zend\\Module\\Manager was stripped of most functionality; it now simply iterates requested modules and triggers events.
  - Former manager functionality such as class loading and instantiation, `init()` triggering, configuration gathering, and autoloader seeding were moved to event listeners.
  - Post-module loading configuration globbing support was added, simplifying the story of overriding module configuration.
  - The recommended filesystem no longer uses plurals for directory names.
  - The recommendations now include a     chdir(__DIR__ . 
                '/../')
 from the "public/index.php" file, and specifying configuration paths to be relative to application directory.

 In addition, over 100 bug and feature requests were handled since 2.0.0beta1.

 The [skeleton application](http://github.com/zendframework/ZendSkeletonApplication) and a [skeleton module](http://github.com/zendframework/ZendSkeletonModule) built for 2.0.0beta1 have been updated for 2.0.0beta2, and are a great place to look to help get you started. You may also want to check out the [quick start guide to the MVC](http://packages.zendframework.com/docs/latest/manual/en/zend.mvc.quick-start.html). powerful.

 As a reminder, all ZF2 components are also available individually as [Pyrus](http://pear2.php.net) packages; packages.zendframework.com is our official channel.

 I'd like to thank each and every person who has contributed ideas, feedback, pull requests (no pull request is too small!), testing, and more -- we have a solid chunk of quality new functionality to test now thanks to your efforts!
