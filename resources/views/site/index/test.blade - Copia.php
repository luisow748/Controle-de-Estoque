<?php include 'assets/src/variaveis.php';
$url = $var['caminho_absoluto'];
?>

@extends('layout_whiteboard')
    @section('title')
       Test
    @endsection

@section('header')
 
@endsection

@section('content')

<div class="row ml-2">
    <div class="col-3">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" 
      aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" 
        href="#v-pills-home" role="tab" aria-controls="v-pills-home" 
        aria-selected="true">Home</a>

        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" 
        href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" 
        aria-selected="false">Profile</a>

        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" 
        href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" 
        aria-selected="false">Messages</a>

        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" 
        href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" 
        aria-selected="false">Settings</a>
      </div>
    </div>
    <div class="col-9">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" 
        aria-labelledby="v-pills-home-tab">.
            sdfk jskdfj kosjfkosfko okasfdojkodsdkfo oskdfsj ofkj osdk okj fkoj kojsf kosjofd j
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" 
        aria-labelledby="v-pills-profile-tab">
            dsfjh j fsiosjjsd jifsjif isdij fhjisdhjifhsdjifh 
        </div>

        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" 
            aria-labelledby="v-pills-messages-tab">
        ajldh ashd jkasdjkashdj khasjkd hasjkdh 
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" 
        aria-labelledby="v-pills-settings-tab">
             aohfdjiojsdji sjisji jifsd jifjis jifisdhfji hsijisdfijfsifiidi j sijj 
             das d sa dass fkhsadf 
             dsdsds dd
        </div>
      </div>
    </div>
  </div>
@endsection
