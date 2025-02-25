# COACHTECH フリーマーケット
## 環境構築
### Dockerビルド
1. git clone git@github.com:yushi0708/Freshly-picked-form.git
2. docker-compose up -d build

※ MySQLは、OSによって起動しない場合があるのでそれぞれのPCに合わせてdocker-compose.ymlファイルを編集して下さい。

### Laravel環境構築
1. docker-compose exec php bash
2. composer install
3. .env.exampleファイルから.envを作成し、環境変数を変更
4. php artisan key:generate
5. php artisan migrate
6. pht artisan db:seed

## ER図
添付の　FRESHLY-PICKED-FORM.drawio.png　を参照して下さい。
   
## 使用技術
・Laravel Framework 8.83.8
・PHP Version 7.4.9
・mysql  Ver 8.0.26 for Linux on x86_64 

## URL
・開発環境:http://localhost/
・phpMyAdmin:http://localhost:8080/
