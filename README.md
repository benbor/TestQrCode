CiklumTest
========================================

This is a test library.

Installation via composer
-------------

1. [Add current repository to composer.json](https://getcomposer.org/doc/05-repositories.md#vcs)
2. Require library: `composer require "ciklum/qr-generator"`

Usage
-------

Open [functional test](tests/Functional/GenerateLogicTest.php) for example of usage

Recommendation
-------------
If you can use Dependency Container  just use it. For example for symfony2
```yaml
# app/config/services.yml
services:
    guzzle_client:
        class:        GuzzleHttp\Client
    ciklum.qr.google_renderer:
        class:        Ciklum\QrGenerator\Renderer\GoogleChartsRenderer
        arguments:    [@guzzle_client]
    ciklum.qr.generator:
        class:        Ciklum\QrGenerator\Generator
        arguments:    [@ciklum.qr.google_renderer]
```

And you will be able to use it:  
```php
class HelloController extends Controller
{
    // ...

    public function generateQrAction()
    {
        // ...
        $generator = $this->get('ciklum.qr.generator');
        $imageBody = $generator->generate('Some text', 50, 50);
    }
}
```




For code reviewers
===================
It isn't completed library. For more flexibility need introduce GenerateParams class, which 
will be used  as single param for  RendererInterface->render method :
 `function (GenerateParams $params) {..} ` . That will allow us to change set of possibility 
 parameters in one place and that allow us to have default params in one place. Sorry, 
 but ooops... i don't have enough time :(
 <br> Anyway, i hope you enjoy my coding style 