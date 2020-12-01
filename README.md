
### Tweet&Follow介紹

 Tweet&Follow是參考Laracast的[Laravel From Scratch系列](https://laracasts.com/series/laravel-6-from-scratch#chapter-14)
 - 網站雛形模仿[Twitter](https://twitter.com/home)
 - 作為Laravel框架練習
 - 使用Laravel 7.x

## 網站實作分為六個方面

- **Auth** 註冊或登入
- **HOME** 首頁
- **EXPLORE** 發現其他有註冊Tweet&Follow的人並追蹤
- **PROFILE** 個人頁面
- **EDIT PROFILE** 修改個人頁面
- **LOGOUT** 登出

## Auth
- 使用laravel/ui套件快速搭建前端的註冊與登入
- 使用session確認使用者身份

## 所有頁面
都具有左右兩邊的側邊欄 
 - 左：到各頁面的連結及登出
 - 右：追蹤的名單

## HOME
首頁，具有留言/列出追蹤人與自己的所有留言/喜歡或不喜歡留言功能

## EXPLORE
列出所有註冊人的名單，可點入到該人的個人頁面觀看其全部留言與自我介紹並追蹤

## PROFILE
- 確認使用者身份
  - 若使用者與個人頁面的擁有者相同，則前端按鈕則為Edit Profile，轉到修改個人資料頁面
  - 若使用者與個人頁面的擁有者不同，則前端按鈕則為Follow Me或Unfollow Me，轉回個人資料頁面
- 下方為該個人頁面擁有者的留言紀錄

## EDIT PROFILE
- 確認使用者身份
  - 確認使用者是否為個人頁面的擁有者，如果不是，則會出現403 unauthorized頁面
  - 可修改個人的email/name/username
  - 可新增大頭照：使用Laravel的storage
  
## LOGOUT
登出

## 雲端部署
- 使用Google的App (例子待補)
