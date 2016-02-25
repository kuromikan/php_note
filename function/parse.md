字串分割、陣列合併

|function      |說明                        |
|--------------|----------------------------|
|strpos        |字串比對                    |
|str_replace   |字串替換                    |
|trim          |去除字串頭尾空白&特殊字元   |
|ltrim         |去除字串頭空白&特殊字元     |
|rtrim         |去除字串尾空白&特殊字元     |
|substr        |去除字串從後面數來n個字元   |

```
strpos($str1,$str2)
```
以str1為主，使用str2當關鍵字比對

回傳值>0則是有相同字串，否則為str2的字串沒有在str1中


```
str_replace($str2,$str3,$str1)
```
str3為完整的字串內容，str2是要被替換掉的字串，str3為替換str2的字串


```
trim($str1)
```
去除str1頭尾空白及特殊字元


```
ltrim($str1)
```
去除str1頭空白及特殊字元


```
rtrim($str1)
```
去除str1尾空白及特殊字元


```
substr($str1,0,$n)
```
去除str1從右往左數$n個字元