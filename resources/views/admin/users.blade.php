@extends('admin.layout')

@section('title', '后台用户')

@section('head')
Zhi Hu 后台用户
@endsection

@section('content')
            <!--新增用户-->
            <div class="am-popup" id="my-popup">
              <div class="am-popup-inner">
                <div class="am-popup-hd">
                  <h4 class="am-popup-title">...</h4>
                  <span data-am-modal-close
                        class="am-close">&times;</span>
                </div><br>
                <div class="am-popup-bd">
                  <form action="" class="am-form" data-am-validator>
              <fieldset>
                <legend>Users 用户添加</legend>
                <div class="am-form-group">
                  <label for="doc-vld-name-2">用户名：</label>
                  <input type="text" id="doc-vld-name-2" minlength="3" placeholder="输入用户名（至少 3 个字符）" required/>
                </div>

                <div class="am-form-group">
                  <label for="doc-ipt-file-1">头像上传域</label>
                  <input type="file" id="doc-ipt-file-1">
                  <p class="am-form-help">请选择要上传的头像...</p>
                </div>

                <div class="am-form-group">
                  <label for="doc-vld-email-2">邮箱：</label>
                  <input type="email" id="doc-vld-email-2" placeholder="输入邮箱" required/>
                </div>

                <div class="am-form-group">
                  <label for="doc-vld-email-2">手机号：</label>
                  <input type="email" id="doc-vld-email-2" placeholder="输入手机号" required/>
                </div>

                <div class="am-form-group">
                  <label for="doc-select-1">权限单选框</label>
                  <select id="doc-select-1" required>
                    <option value="">-=请选择一项=-</option>
                    <option value="option1">普通用户</option>
                    <option value="option2">超级管理员</option>

                  </select>
                  <span class="am-form-caret"></span>
                </div>

                <div class="am-form-group">
                  <label for="doc-vld-ta-2">个人简介：</label>
                  <textarea id="doc-vld-ta-2" minlength="10" maxlength="100"></textarea>
                </div>

                <button class="am-btn am-btn-secondary" type="submit">提交</button>
              </fieldset>
            </form>
                </div>
              </div>
            </div>
            <!--结束-->
            <div class="tpl-portlet-components">
                <div class="portlet-title">
                    <div class="caption font-green bold">
                        <span class="am-icon-code"></span> 列表
                    </div>
                    <div class="tpl-portlet-input tpl-fz-ml">
                        <div class="portlet-input input-small input-inline">
                            <div class="input-icon right">
                                <i class="am-icon-search"></i>
                                <input type="text" class="form-control form-control-solid" placeholder="搜索..."> </div>
                        </div>
                    </div>


                </div>
                <div class="tpl-block">
                    <div class="am-g">
                        <div class="am-u-sm-12 am-u-md-6">
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button type="button" class="am-btn am-btn-default am-btn-success" data-am-modal="{target: '#my-popup'}"><span class="am-icon-plus"></span> 新增</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-secondary"><span class="am-icon-save"></span> 保存</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-warning"><span class="am-icon-archive"></span> 审核</button>
                                    <button type="button" class="am-btn am-btn-default am-btn-danger"><span class="am-icon-trash-o"></span> 删除</button>
                                </div>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-form-group">
                                <select data-am-selected="{btnSize: 'sm'}">
              <option value="op1">a</option>
              <option value="op2">b</option>

            </select>
                            </div>
                        </div>
                        <div class="am-u-sm-12 am-u-md-3">
                            <div class="am-input-group am-input-group-sm">
                                <input type="text" class="am-form-field">
                                <span class="am-input-group-btn">
            <button class="am-btn  am-btn-default am-btn-success tpl-am-btn-success am-icon-search" type="button"></button>
          </span>
                            </div>
                        </div>
                    </div>
                    <div class="am-g">
                        <div class="am-u-sm-12">
                            <form class="am-form">
                                <table class="am-table am-table-striped am-table-hover table-main">
                                    <thead>
                                        <tr>
                                            <th class="table-check"><input type="checkbox" class="tpl-table-fz-check"></th>
                                            <th class="table-id">ID</th>
                                            <th class="table-title">用户名</th>
                                            <th class="table-type">文章数</th>
                                            <th class="table-author am-hide-sm-only">收藏数</th>
                                            <th class="table-type">回答数</th>
                                            <th class="table-type">获赞数</th>
                                            <th class="table-type">提问数</th>

                                            <th class="table-set">操作</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($users as $user)
                                        <tr>
                                            <td><input type="checkbox"></td>
                                            <td>{{$user->uid}}</td>

                                            <td><a href="#">{{ $user->uname }}</a>
                                            </td>

                                            <td>{{ $user->article }}</td>
                                            <td>{{ $user->collect }}</td>
                                            <td>{{ $user->answer }}</td>

                                            <td>{{ $user-> praise }}</td>
                                            <td>{{ $user-> quiz }}</td>




                                            <td>
                                                <div class="am-btn-toolbar">
                                                    <div class="am-btn-group am-btn-group-xs">
                                                        <button class="am-btn am-btn-default am-btn-xs am-text-secondary"><span class="am-icon-pencil-square-o"></span> 编辑</button>
                                                        <button class="am-btn am-btn-default am-btn-xs am-hide-sm-only"><span class="am-icon-copy"></span> 复制</button>

                                                        <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only"><span class="am-icon-trash-o"></span> 删除</button>

                                                        <!--用户模态框按钮-->

                                                         <input style="background: white;" class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only" data-am-modal="{target: '#my-alert'}" type="button " value="用户详情" id="{{ $user->uid }}" />

                                            <div class="am-modal am-modal-alert" tabindex="-1" id="my-alert">
                                              <div class="am-modal-dialog">
                                                <div class="am-modal-hd">用户-详情</div>
                                                <div class="am-modal-bd">

                                                </div>
                                                <div class="am-modal-footer">
                                                  <span class="am-modal-btn">确定</span>
                                                </div>
                                              </div>
                                            </div>

                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                <div class="am-cf">

                                    <div class="am-fr">
                                        <ul class="am-pagination tpl-pagination">
                                            <li class="am-disabled"><a href="#">«</a></li>
                                            <li class="am-active"><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li><a href="#">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <hr>

                            </form>
                        </div>

                    </div>
                </div>
                <div class="tpl-alert"></div>

            </div>
    <script type="text/javascript">

        $(function(){

            //CSRF
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $("input").click(function(){

            //获取点击id
            var id = $(this).attr("id");
            // alert(id);
            //发送Ajax
            $.get('users',{uid:id},function(data){
                // console.log(data);
                // alert(data);
                // $(".am-modal-bd").html(data);
                eval('var json ='+data );
                // console.log(json);
                // $(".am-modal-bd").html(json);
                for (var i = 0; i < json.length; i++) {
                    // console.log(json[i]['uname']);
                    var app = `
                        <table class="am-table">
                            <thead>
                                <tr>
                                    <th>用户名</th>
                                    <th>头像</th>
                                    <th>号码</th>
                                    <th>邮箱</th>
                                    <th>权限</th>
                                </tr>

                            </thead>
                            <tbody>
                                <tr>
                                    <td>`+json[i]['uname']+`</td>
                                    <td><img width="60px" height="60px" src=`+json[i]['map']+` alt='' onerror='this.src="/uploade/default.jpg"'></td>
                                    <td>`+json[i]['phone']+`</td>
                                    <td>`+json[i]['mail']+`</td>
                                    <td>`+json[i]['privileges']+`</td>
                                </tr>
                            </tbody>
                    </table>
                    <div style="float:left;">个人简介：</div>
                    <span style="float:left;">`+json[i]['intro']+`</span>
                    `;
                    $(".am-modal-bd").html(app);

                };

            })

})

})
    </script>
@endsection