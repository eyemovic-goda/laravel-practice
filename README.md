# Laravelの勉強用Git

Macでしか実行していないです。


## 各ファイルの権限を変更
```
chmod -R 777 logs src/storage/logs start_up.sh
```

## ルートディレクトリの.env.exampleをコピーし、.envというファイル名で保存
`cp ./.env.example ./.env`

## Dockerの立ち上げ
`docker-compose up -d --build`

## Dockerコンテナ内にLaravelファイルを準備
```
./start_up.sh
```

## Docker環境の破棄
```
docker-compose down --volumes --rmi all
```

