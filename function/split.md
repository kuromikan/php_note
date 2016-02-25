字串分割、陣列合併

|function      |說明                    |
|--------------|------------------------|
|explode       |分割字串到陣列          |
|implode       |合併陣列到字串          |
|array_merge   |合併陣列成為新的陣列    |

```
$arr=explode($split, $str);
```
$split為要分割的關鍵字串
例如$split=","時，字串內容為1,2,3就會分隔成1 2 3分別放在陣列中
$str則是要分割的字串


```
$str=implode($merge, $arr);
```
$merge為合併陣列內容間要用的字串
例如$merge=";"時，陣列內容為("aa","bb","cc")則合併後的字串為aa;bb;cc
$array則是要合併內容的陣列


```
$new_array=array_merge($arr1,$arr2);
```
array_merge可以合併兩個或以上的陣列
假設$arr1=("a","c");$arr2=("x",z);
透過上面範例將合併的結果儲存至$new_array
new_array的內容為("a","c","x","z")