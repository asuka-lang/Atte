# Atte
　　　勤怠管理アプリ。
 　社員専用。打刻ページと日付ごとの勤怠ページを設定。
  
## 作成した目的
　　　　　　　　人事評価のため。

## アプリケーションURL
    http://localhost
    初めての方のログインは会員ページで登録してからログイン可能となる。
## 機能一覧
　　　　　　・会員登録機能
  　　・ログイン、ログアウト機能
  　　・打刻機能（勤務開始・勤務終了・休憩開始・休憩終了）
  　　・日付別勤怠情報取得機能
  （未完成）　ページネーション機能

##  使用技術（実行環境）
　　　　　　・nginx (ローカルサーバー）		
　　　　　　・php (開発言語）		
　　　　　　・mysql (データベース）		
　　　　　　・phpmyadmin (データベースブラウザ表示用）		
　　　　　　・Laravel 8.x (フレームワーク）		

##  テーブル設計

usersテーブル	✔︎.    				
カラム名	　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　型	　　　　　　　　　　　　　　　　　PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
id	　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　unsigned bigint	　　　　　　　　◯			
name	　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　varchar (255)			　　　　　　　　◯	
email	　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　varchar (255)　　　　　　　　　　　　　　　　　◯	　　　　　　　　　　　　　　　　　　　　　　　　◯	
email_verified_at	　　　　　　timestamp				
password	　　　　　　　　　　　　　　　　　　　　　　varchar (255)		　　　　　　　　　◯	
rememberToken	　　　　　　　　　　　　　　varchar (100)				
created_at	　　　　　　　　　　　　　　　　　　timestamp				
updated_at	　　　　　　　　　　　　　　　　　　timestamp				
					
worksテーブル    ✔︎　					
カラム名	　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　型	　　　　　　　　　　　　　　　　　　　PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
id	　　　　　　　　　　　　　　　　　　　　　　　　　　　unsigned bigint	　　　　　　　　　　　　◯			
user_id	　　　　　　　　　　　　　　　　　　　　　　　　　　　unsigned bigint	　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　◯
start　　　　　　　　　　　　　　　　　　　　　　　　　　　　　	　　datetime				
end	　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　datetime				
created_at	　　　　　　　　　　　　　　　　　　timestamp				
updated_at	　　　　　　　　　　　　　　　　　　timestamp				
					
breakingsテーブル     ✔︎　					
カラム名	　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　　型	　　　　　　　　　　　　　　　　　　　　PRIMARY KEY	UNIQUE KEY	NOT NULL	FOREIGN KEY
id	　　　　　　　　　　　　　　　　　　　　　　　　　　　unsigned bigint	　　　　　　　　　　　　◯			
work_id	　　　　　　　　　　　　　　　　　　　　　　　　　　　unsigned bigint		　　　　　　　　　　　　　　　　　　　　　　　◯
break_in	　　　　　　　　　　　　　　　　　　　　　　　datetime				
break_out	　　　　　　　　　　　　　　　　　　　　　　　datetime				
created_at	　　　　　　　　　　　　　　　　　　　timestamp				
updated_at	　　　　　　　　　　　　　　　　　　　timestamp				

##   ER図

![test drawio](https://github.com/asuka-lang/Atte/assets/143139948/5a34bbae-6e50-4627-ad3a-3c6439a363ff)

##   環境構築

・docker-compose up -d --build  (開発環境構築)				
・composer -v				
・composer create -project "laravel/laravel=8.*"  . --prefer dist				
(composerでlaravelプロジェクト作成）				
・ .envファイルの編集（データベースのmysqlとの接続）				
				
・composer require laravel/fortify (Fortify導入)				
・php artisan migrate　（マイグレーションファイル作成)				
・php artisan db:seed　（シーディングによるダミーデータ作成)				

## 残念ながら一部の機能が設定できておりません。
