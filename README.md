# com-tangdj
    This is a private warehouse service, feel free to use, problems need to be resolved
    

## Test code


```php
require_once './vendor/autoload.php';

use Ofashion\Http\OFashionHttp;

//异步
$r = OFashionHttp::asJson()->setRequestTimeout(30)->get('116.62.132.116:85/get_conversation_list', ['a' => 'b'])->json();

$r = OFashionHttp::asJson()->setRequestTimeout(30)->post('116.62.132.116:85/get_conversation_list', ['a' => 'b'])->json();

//并发
$r = OFashionHttp::unwrap([
    'a' => OFashionHttp::asJson()->getConcurrent('116.62.132.116:85/get_conversation_list', ['a' => 'b']),
    'b' => OFashionHttp::asJson()->postConcurrent('116.62.132.116:85/get_conversation_list', ['a' => 'b'])
]);

$a = $r['a']->json();
$b = $r['b']->json();
```