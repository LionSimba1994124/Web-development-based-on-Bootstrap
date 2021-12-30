<!DOCTYPE html>
<html lang="en-US" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Deom page</title>
   
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="assets/js/config.js"></script>
    <script src="vendors/overlayscrollbars/OverlayScrollbars.min.js"></script> 
    <script src="assets/js/echart-example.js"></script> 

    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
    <link href="vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    <link href="assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="assets/css/user.min.css" rel="stylesheet" id="user-style-default">
    <link href="assets/css/user.css" rel="stylesheet" id="user-style-default">

    <script>
      var isRTL = JSON.parse(localStorage.getItem('isRTL'));
      if (isRTL) {
        var linkDefault = document.getElementById('style-default');
        var userLinkDefault = document.getElementById('user-style-default');
        linkDefault.setAttribute('disabled', true);
        userLinkDefault.setAttribute('disabled', true);
        document.querySelector('html').setAttribute('dir', 'rtl');
      } else {
        var linkRTL = document.getElementById('style-rtl');
        var userLinkRTL = document.getElementById('user-style-rtl');
        linkRTL.setAttribute('disabled', true);
        userLinkRTL.setAttribute('disabled', true);
      }
    </script>
  </head>


  <body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">               
                <a href="#" class="navbar-brand"><img src="assets/img/logos/cocacola.png"></a>                
            </div>
            <div id="div_menu" class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li></li>
                </ul>
            </div>           
        </div>
    </div>   
    <div class="body-content container" data-layout="container">
        <div class="jumbotron">       
            <input class="form-control" type="text" placeholder="ASIN、JAN、キーワード" />
            <input class="form-control" type="submit" value="検索"/>        
        </div>
        <div class="main-content">
            <div class="row group-1">
                <div class="col-md-5">
                    <p data-nsfw-filter-status="swf">
                        <a href="https://www.amazon.co.jp/gp/product/B01KZ84976" id="MainContent_link_Image" target="_blank" data-nsfw-filter-status="swf">
                            <img id="MainContent_img_Image" src="https://images-na.ssl-images-amazon.com/images/I/51ot-T8GImL.jpg" style="width: 130px; visibility: visible;" data-xblocker="passed" data-nsfw-filter-status="sfw">
                        </a>
                    </p>
                    <p data-nsfw-filter-status="swf">
                        <a href="https://www.amazon.co.jp/gp/product/B01KZ84976" id="MainContent_link_Title" target="_blank" data-nsfw-filter-status="swf">
                            <span id="MainContent_lbl_Title" data-nsfw-filter-status="swf">アンパンマン キラ★ピカ★いっしょにステージ ミュージックショー</span>
                        </a>
                    </p>
                </div>     
                <div class="col-md-7">
                    <div class="size_box4">
                        <span>大型・特大型</span>
                    </div>
                    <table class="table table-bordered overflow-hidden">
                        <tbody>
                            <tr class="btn-reveal-trigger">
                                <th scope="col">カテゴリ</th>
                                <th scope="col">おもちゃ > 楽器玩具 > ピアノ・鍵盤楽器</th>                             
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td>ランキング</td>
                                <td>1252位(おもちゃ)</td>                            
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td>ASIN</td>
                                <td>B01KZ84976</td>                            
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td>JAN</td>
                                <td>4975201180669</td>
                            </tr>  

                            <tr class="btn-reveal-trigger">
                                <td>参考価格</td>
                                <td>13824円</td>                            
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td>規格番号</td>
                                <td></td>                            
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td>メーカー</td>
                                <td>ジョイパレット(JOYPALETTE)</td>
                            </tr> 
                            <tr class="btn-reveal-trigger">
                                <td>発売日</td>
                                <td>2016-11-05</td>                            
                            </tr>
                            <tr class="btn-reveal-trigger">
                                <td>バリエーション</td>
                                <td>あり</td>                            
                            </tr>                                           
                        </tbody>
                    </table>
                </div> 
            </div>
            <div class="row group-2">
                <div class="col-lg-12">
                    <div class="">
                        <h4>損益分岐点</h4>
                    </div>
                    <table class="table table-bordered overflow-hidden text-center">                   
                        <thead>
                            <tr>
                                <th scope="col">コンディション</th>
                                <th scope="col">最安値</th>   
                                <th scope="col">入金</th>
                                <th scope="col">出品者数</th>    
                                <th scope="col">3か月の販売数(販売数/出品者数)</th>                      
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="color-blue">
                                <td>カート</td>
                                <td>￥7955</td>   
                                <td>￥5824</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>
                            <tr class="color-green">
                                <td>新品</td>
                                <td>￥7955</td> 
                                <td>￥5824</td>
                                <td>9</td>  
                                <td>267個(29.7)</td>                         
                            </tr>
                            <tr class="color-chocolate">
                                <td>中古</td>
                                <td>￥8442</td>
                                <td>￥6262</td>
                                <td>2</td>
                                <td>7個(3.5)</td>
                            </tr>  
                            <tr class="color-darkcyan">
                                <td>Amazon</td>
                                <td>￥7955</td>
                                <td>￥5824</td>
                                <td>-</td>
                                <td>-</td>
                            </tr>                      
                        </tbody>
                    </table>          
                </div>
            </div>
            <div class="row group-3">
                <div class="col-lg-12">
                    <div class="tabs">
                        <div class="col-auto ms-auto">
                            <div class="nav nav-pills nav-pills-falcon flex-grow-1" role="tablist">
                                <button class="btn btn-sm" data-bs-toggle="pill" type="button" role="tab" >
                                    <a href="#">1か月</a>
                                </button>
                                <button class="btn btn-sm active" data-bs-toggle="pill" type="button" role="tab">
                                    <a href="#">3か月</a>
                                </button>
                                <button class="btn btn-sm" data-bs-toggle="pill" type="button" role="tab" >
                                    <a href="#">6か月</a>
                                </button>
                                <button class="btn btn-sm" data-bs-toggle="pill" type="button" role="tab">
                                    <a href="#">9か月</a>
                                </button>
                                <button class="btn btn-sm" data-bs-toggle="pill" type="button" role="tab" >
                                    <a href="#">12か月</a>
                                </button>                               
                            </div>
                        </div>
                    </div>                      
                </div>
            </div>
            <div class="row group-4">
                <div class="col-lg-12">
                    <div>
                        <p>最安値</p>
                    </div>                               
                    <div class="charts">
                        <div class="echart-stacked-area-chart-example" style="min-height: 300px;" data-echart-responsive="true"></div>     
                    </div>
                </div>                      
            </div> 
            <div class="row group-5">
                <div class="col-lg-12">
                    <div class="">
                        <h4>利益計算</h4>
                    </div>
                    <table class="table table-bordered overflow-hidden"> 
                        <tbody>
                            <tr >
                                <td>出品価格</td>
                                <td>
                                    <input class="form-control" type="number" value="7954" />
                                </td> 
                            </tr>
                            <tr >
                                <td>ポイント</td>
                                <td>
                                    <input class="form-control" type="number" value="0" />
                                </td>                                                  
                            </tr>
                            <tr >
                                <td>出品送料</td>
                                <td>
                                    <input class="form-control" type="number" value="0" />
                                </td>                            
                            </tr>  
                            <tr >
                                <td>                                    
                                    <div class="form-price-check">
                                        <span>仕入値</span>
                                        <div>
                                            <input class="form-check-input" id="flexCheckChecked" type="checkbox" value="" checked="" />
                                            <label class="form-check-label" for="flexCheckChecked">税込み</label>
                                        </div>                                        
                                    </div>
                                </td>
                                <td>
                                    <input class="form-control" type="number" value="0" />
                                </td>                            
                            </tr>  
                            <tr >
                                <td>
                                    <div class="form-radio-check">
                                        <div>
                                            <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault" checked="" />
                                            <label class="form-check-label" for="flexRadioDefault2">FBA利用</label>
                                        </div>
                                        <div>
                                            <input class="form-check-input" id="flexRadioDefault2" type="radio" name="flexRadioDefault" checked="" />
                                            <label class="form-check-label" for="flexRadioDefault2">自己発送</label>
                                        </div>                                        
                                    </div>
                                    
                                </td>
                                <td class="price">1335</td>                           
                            </tr> 
                            <tr >
                                <td>販売手数料</td>
                                <td></td>
                            </tr>                     
                        </tbody>
                    </table> 
                    <div class="profit-calc">
                        <input class="form-control" type="submit" value="利益計算"/>
                    </div>         
                </div>
                <div class="col-lg-12">
                    <p>粗利(率)</p>
                </div>
            </div>   
            <div class="row group-6">
                <div class="col-lg-12">
                    <p>
                        <button class="btn collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample1" aria-expanded="false" aria-controls="multiCollapseExample2">▼カート取得率▼</button>
                    </p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="collapse multi-collapse mb-3 mb-sm-0" id="multiCollapseExample1">
                                <table class="table table-bordered overflow-hidden text-center"> 
                                    <thead class="table-primary">
                                        <th>カート取得率</th>
                                        <th>セラーID</th>
                                    </thead>
                                    <tbody>
                                        <tr >
                                            <td >87％</td>
                                            <td>
                                                <a href="#">Amazon</a>
                                            </td> 
                                        </tr>
                                        <tr >
                                            <td >12％</td>
                                            <td>
                                                <a href="#">カート取得者なし</a>
                                            </td>                                                  
                                        </tr> 
                                        <tr >
                                            <td >1％</td>
                                            <td>
                                                <a href="#">A3575Q2YDPUEXD</a>
                                            </td>                                                  
                                        </tr>                                                          
                                    </tbody>
                                </table> 
                            </div>
                        </div>                    
                    </div>
                </div>
            </div> 
            <div class="row group-7">
                <div class="col-lg-12">
                    <button class="btn collapse-button" type="button" >
                        <span class="material-icons text-secondary fs-2" data-nsfw-filter-status="swf">open_in_new</span>
                        <a href="#">Amazon出品者一覧へ</a>
                    </button> 
                </div>
            </div>
            <div class="row group-8">
                <div class="col-lg-12">
                    <div>
                        <h4>月ごとの販売数</h4>
                    </div>
                    <table class="table table-bordered overflow-hidden text-center">
                        <thead class="table-success">
                            <tr>
                                <th></th>
                                <th>過去1か月目販売数</th>
                                <th>過去2か月目販売数</th>
                                <th>過去3か月目販売数</th>
                                <th>平均月間販売数</th>
                                <th>3か月合計販売数</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            <tr>
                                <td>合計</td>
                                <td>83</td>
                                <td>106</td>
                                <td>85</td>
                                <td>91.3</td>
                                <td>274</td>
                            </tr>
                            <tr>
                                <td>新品</td>
                                <td>81</td>
                                <td>103</td>
                                <td>83</td>
                                <td>89</td>
                                <td>267</td>
                            </tr>
                            <tr>
                                <td>中古</td>
                                <td>2</td>
                                <td>3</td>
                                <td>2</td>
                                <td>2.3</td>
                                <td>7</td>
                            </tr>                            
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row group-9">
                <div class="col-lg-12">
                    <p>
                        <button class="btn collapse-button" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2">▼最安値一覧▼</button>
                    </p>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="collapse multi-collapse mb-3 mb-sm-0" id="multiCollapseExample2">
                                <table class="table table-bordered overflow-hidden">
                                    <tbody>
                                        <tr>
                                            <td>調査日</td>
                                            <td>ランキング</td>
                                            <td>新品出品者数</td>
                                            <td>新品最安値</td>
                                            <td>中古出品者数</td>
                                            <td>中古最安値</td>
                                        </tr>
                                        <tr>
                                            <td>12/29 16:18</td>
                                            <td>1252</td>
                                            <td>9</td>
                                            <td>7955</td>
                                            <td>2</td>
                                            <td>8442</td>
                                        </tr>  
                                        <tr>
                                            <td>12/29 16:18</td>
                                            <td>1252</td>
                                            <td>9</td>
                                            <td>7955</td>
                                            <td>2</td>
                                            <td>8442</td>
                                        </tr> 
                                        <tr>
                                            <td>12/29 16:18</td>
                                            <td>1252</td>
                                            <td>9</td>
                                            <td>7955</td>
                                            <td>2</td>
                                            <td>8442</td>
                                        </tr> 
                                        <tr>
                                            <td>12/29 16:18</td>
                                            <td>1252</td>
                                            <td>9</td>
                                            <td>7955</td>
                                            <td>2</td>
                                            <td>8442</td>
                                        </tr>                   
                                    </tbody>
                                </table>
                            </div>
                        </div>                    
                    </div>
                </div>
            </div> 
        </div> 
    </div>

    <div class="footer-nav">
        <div class="container">
            <p>© 2021 - リーファ</p>         
        </div>
    </div> 

    <script src="vendors/popper/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/anchorjs/anchor.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="vendors/echarts/echarts.min.js"></script>
    <script src="vendors/fontawesome/all.min.js"></script>
    <script src="vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="vendors/list.js/list.min.js"></script>
    <script src="assets/js/theme.js"></script>
  </body>
</html>