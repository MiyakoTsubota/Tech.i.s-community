
# 手順

1 git clone https://github.com/MiyakoTsubota/Tech.i.s-community.git をターミナルで実行する

2 cd cloneしたディレクトリ名 をターミナルで実行する

3 cp .env.example .env をターミナルで実行する

4 composer i をターミナルで実行する

5 tech_i_s_communityの名前でデータベースを作成する

6 マイグレーション作成

7 laravelを起動して確認する


# adminLTEを導入してViewを反映させる手順

1 AdminLTEの導入状況を確認 php artisan adminlte:status
  AdminLTE本体や、設定ファイル、翻訳ファイルは導入済みか確認
  →上の３つのStatusがInstalledとなっていればOK

2 コマンドの実行 php artisan adminlte:install --only=auth_views
  警告表示される...The authentication views already exists. Want to replace the views? (yes/no)
  →問題なければ yes と入力

3 php artisan serveで確認