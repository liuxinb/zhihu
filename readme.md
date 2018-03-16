<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## 数据库表设计

###### 用户表信息 `zhihu_users`
| 名称 | 类型 | 长度 | 是否为空 | 注释 |
| --- | --- | --- | --- | --- | --- | ---|
| id | int | 11 | N | 主键 |
| uname | varchar | 8 | N | 用户名 |
| phone | char | 11 | N | 手机号 |
| mail | varchar | 20 | N | 邮箱 |
| intro | varchar | 25 | N | 简介 |
| map | varchar | 255 | N | 头像 |
| privileges | enum | 0 | N | 权限 |
| attention | int | 11 | N | 关注量 |
| praise | int | 11 | N | 获赞数 |
| quiz | int | 11 | N | 提问数 |
| answer | int | 11 | N | 回答数 |
| collect | int | 11 | N | 收藏数 |
| article | int | 11 | N | 文章数 |

###### 文章表信息 `zhihu_essay`
| 名称 | 类型 | 长度 | 是否为空 | 注释 |
| --- | --- | --- | --- | --- | --- | ---|
|id | int | 11 | N |
|eid | int | 11 | N | 用户表主键ID
|title| varchar | 20 | N | 文章标题
|comment | varchar | 255 | N | 文章内容
|review | varchar | 255 | N | 评论
|essay_praise |  int | 11 | N  | 获赞数
|essay_incognito| enum | 0,1 | N | 匿名回答勾选

###### 提问表信息 `zhihu_quiz`
| 名称 | 类型 | 长度 | 是否为空 | 注释 |
| --- | --- | --- | --- | --- | --- | ---|
|id | int | 11 | N |
| qid | int |11 | Y | 用户表ID
|issue| varchar | 255 | N | 问题
|topic| varchar | 200 | N | 话题
|describe| varchar | 255 | N | 问题描述
|quiz_incognito| enum | 0,1 | N | 匿名问题勾选