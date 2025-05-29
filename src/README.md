# もぎたて

## 環境構築
Dockerビルド
1. git@github.com:yaki995/simulation.git
2. docker-compose up -d --build

Laravel環境構築   
1. docker-compose exec php bash
2. composer install
3. env.exampleファイルから.envファイルを作成し、環境を変更
4. phpArtisan key:generate
5. phpArtisan 移行
6. phpArtisan bd:seed

## 使用技術(実行環境)
・PHP8.0 <br>
・Laravel10.0 <br>
・MySQL8.0.26

## ER図


## URL
・開発環境：http://localhost/ <br>
・phoMyAdmin：http://localhost:8080/
