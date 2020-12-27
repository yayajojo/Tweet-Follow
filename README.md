
## Tweet&Follow介紹

 Tweet&Follow是參考Laracast的[Laravel From Scratch系列](https://laracasts.com/series/laravel-6-from-scratch#chapter-14)
 - 網站雛形模仿[Twitter](https://twitter.com/home)
 - 作為Laravel框架練習
 - 使用Laravel 7.x
 
## 網站雲端部署（展示用）
- 部署至AWS的Elastic Beanstalk
- 資料庫：使用RDS的mysql
- 使用S3存取頭像等個人自介圖片
- [展示網站網址](http://tweetyandfollow-env.eba-uexehxmm.us-east-2.elasticbeanstalk.com/)
    - 已創建帳號1： (1) Email: tweet1@gmail (2) 密碼： tweetandfollow
    - 已創建帳號2： (1) Email: tweet2@gmail (2) 密碼： tweetandfollow
     
## 網站實作分為六個方面

- **AUTH** 註冊或登入
- **HOME** 首頁
- **EXPLORE** 發現其他有註冊Tweet&Follow的人並追蹤
- **PROFILE** 個人頁面
- **EDIT PROFILE** 修改個人頁面
- **LOGOUT** 登出

## 所有頁面
都具有左右兩邊的側邊欄 
 - 左：到各頁面的連結及登出
 - 右：追蹤的名單
 
## AUTH
- 使用laravel/ui套件快速搭建前端的註冊與登入
- 使用session確認使用者身份

## HOME
- 首頁具有下列功能
    *  留言
    *  列出追蹤人與自己的所有留言：以留言創建的時間排序
    *  喜歡或不喜歡留言

## EXPLORE
- 列出所有使用者的名單
    * 可點入到該人的個人頁面觀看其全部留言與自我介紹
    * 追蹤該人

## PROFILE
- 確認使用者身份
  * 若使用者與個人頁面的擁有者相同，則前端按鈕則為Edit Profile，轉到修改個人資料頁面
  * 若使用者與個人頁面的擁有者不同，則前端按鈕則為Follow Me或Unfollow Me，轉回個人資料頁面
- 下方為該個人頁面擁有者的留言紀錄

## EDIT PROFILE
- 確認使用者身份
  * 確認使用者是否為個人頁面的擁有者，如果不是，則會出現403 unauthorized頁面
  * 可修改個人的email/name/username
  * 可新增大頭照：使用Laravel的storage
  
## LOGOUT
登出


