# お問い合わせフォーム
## 環境構築
### 1.github
- git clone https://github.com/bam600/contactform-laravel.git
### 2.Docker
#### プロジェクト用コンテナ作成
1.  docker-compose up -d --build
2. docker-compose.ymlの編集(必要な場合) 
### 3.laravel
#### インストール
1. docker-compose exec php bash
2. composer install
3. .envファイルの環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. php artisan db:seed

## ER図
![ER図](https://github.com/bam600/contactform-laravel/blob/main/src/test.png)


## 使用技術(実行環境)
- PHP 8.1.33
- Laravel 8.83.8
- mysql

## URL
- 開発環境：http://localhost/
phpMyAdmin:http://localhost:8080/


