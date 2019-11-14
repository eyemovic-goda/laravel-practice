# Laravel5.8の勉強用Git

## Laravelプロジェクト作成
```
docker-compose exec app composer create-project --prefer-dist "laravel/laravel=5.8.*" .
docker-compose exec app composer require predis/predis
```

## 各ファイルの権限を変更
```
MAC
chmod -R 777 logs src/storage/logs start_up.sh

Windows
不要？
```

## ルートディレクトリの.env.exampleをコピーし、.envというファイル名で保存
```
MAC
cp ./.env.example ./.env

Windows
copy .env.example .env
```

## Dockerの立ち上げ
`docker-compose up -d --build`

## Dockerコンテナ内にLaravelファイルを準備
```
MAC
./start_up.sh

Windows 
start_up.bat
```

## Docker環境の破棄
```
docker-compose down --volumes --rmi all
```

