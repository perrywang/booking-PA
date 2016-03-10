@extends('layout.master')
@section('title', '平安旅游')
@section('content')
    <div class="ui grid" style="padding-left:0.5em;padding-right:0.3em;" >
      <div class="ui row">
        <div class="ui four wide column">
          <div style="width:92%;background-color:#db2828;height:72px;text-align:center;padding-top:25px;">
            热门
          </div>
        </div>
        <div class="ui twelve wide column">
          <div class="ui grid">
            <div class="ui two column row">
              <div class="ui column">
                 <a href="#">
                   <div style="width:97%;background-color:#db2828;height:34px;text-align:center;padding-top:5px;">
                     拉斯维加斯
                   </div>
                 </a>
              </div>

              <div class="ui column">
                <div style="width:97%;background-color:#db2828;height:34px;text-align:center;padding-top:5px;">
                  纽约
                </div>
              </div>

            </div>
            <div class="ui two column row" style="margin-top:3px;">
              <div class="ui column">
                 <div style="width:97%;background-color:#db2828;height:34px;text-align:center;padding-top:5px;">
                   东京
                 </div>
              </div>

              <div class="ui column">
                <div style="width:97%;background-color:#db2828;height:34px;text-align:center;padding-top:5px;">
                  奥兰多
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
