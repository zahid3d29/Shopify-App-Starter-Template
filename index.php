<?php

    require_once("inc/functions.php");
    require_once("inc/db_connect.php");
    
    // $shopify = $_GET;
    
    
    // $sql = "SELECT * FROM `Access Token` WHERE store_url ='" . $shopify['shop'] . "' LIMIT 1";
    // $check = mysqli_query($conn, $sql);
    
    // if( mysqli_num_rows($check) < 1){
    //     header("Location: install.php?shop=" . $shopify['shop']);
    //     exit();
    // }

    
    
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>RedApple = Apps </title>

  <!-- Bootstrap core CSS -->
  <!--<link href="vendor/css/bootstrap-grid.min.css" rel="stylesheet">-->
  <!--<link href="vendor/css/bootstrap.min.css" rel="stylesheet">-->
  <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
  <link href="vendor/css/main.css" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/@shopify/polaris@4.26.1/styles.min.css"/>
 

</head>

<body>

<div style="height: 500px;">
  <div style="--top-bar-background:#357997; --top-bar-color:rgb(255, 255, 255); --top-bar-border:rgb(196, 205, 213); --top-bar-background-lighter:hsla(198, 33%, 55%, 1); --p-frame-offset:0px;">
    <div class="Polaris-Frame Polaris-Frame--hasNav Polaris-Frame--hasTopBar" data-polaris-layer="true" data-has-navigation="true">
      <div class="Polaris-Frame__Skip"><a href="#AppFrameMainContent" class="Polaris-Frame__SkipAnchor">Skip to content</a></div>
      <div class="Polaris-Frame__TopBar" data-polaris-layer="true" data-polaris-top-bar="true" id="AppFrameTopBar">
        <div class="Polaris-TopBar"><button type="button" class="Polaris-TopBar__NavigationIcon" aria-label="Toggle menu"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                <path d="M19 11H1a1 1 0 1 1 0-2h18a1 1 0 1 1 0 2zm0-7H1a1 1 0 0 1 0-2h18a1 1 0 1 1 0 2zm0 14H1a1 1 0 0 1 0-2h18a1 1 0 1 1 0 2z"></path>
              </svg></span></button>
          <div class="Polaris-TopBar__LogoContainer"><a class="Polaris-TopBar__LogoLink" href="http://jadedpixel.com" data-polaris-unstyled="true" style=""><img src="http://dev.btcinfluencer.com/vendor/img/noticeanywhere.png" alt="Jaded Pixel" class="Polaris-TopBar__Logo"></a></div>
          <div class="Polaris-TopBar__Contents">
            <div class="Polaris-TopBar__SearchField">
              <div class="Polaris-TopBar-SearchField"><span class="Polaris-VisuallyHidden"><label for="PolarisSearchField1">Search</label></span><input id="PolarisSearchField1" class="Polaris-TopBar-SearchField__Input" placeholder="Search" type="search" autocapitalize="off" autocomplete="off" autocorrect="off" value=""><span class="Polaris-TopBar-SearchField__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                      <path d="M8 12a4 4 0 1 1 0-8 4 4 0 0 1 0 8m9.707 4.293l-4.82-4.82A5.968 5.968 0 0 0 14 8 6 6 0 0 0 2 8a6 6 0 0 0 6 6 5.968 5.968 0 0 0 3.473-1.113l4.82 4.82a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414" fill-rule="evenodd"></path>
                    </svg></span></span>
                <div class="Polaris-TopBar-SearchField__Backdrop"></div>
              </div>
              <div class="Polaris-TopBar-Search">
                <div class="Polaris-TopBar-Search__Results">
                  <div class="Polaris-Card">
                    <div class="Polaris-ActionList">
                      <div class="Polaris-ActionList__Section--withoutTitle">
                        <ul class="Polaris-ActionList__Actions">
                          <li><button type="button" class="Polaris-ActionList__Item">
                              <div class="Polaris-ActionList__Content">Shopify help center</div>
                            </button></li>
                          <li><button type="button" class="Polaris-ActionList__Item">
                              <div class="Polaris-ActionList__Content">Community forums</div>
                            </button></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="Polaris-TopBar__SecondaryMenu"></div>
            <div>
              <div class="Polaris-TopBar-Menu__ActivatorWrapper"><button type="button" class="Polaris-TopBar-Menu__Activator" tabindex="0" aria-controls="Polarispopover1" aria-owns="Polarispopover1" aria-expanded="false">
                  <div class="Polaris-MessageIndicator__MessageIndicatorWrapper"><span aria-label="Avatar with initials D" role="img" class="Polaris-Avatar Polaris-Avatar--sizeSmall Polaris-Avatar--styleThree"><span class="Polaris-Avatar__Initials"><svg class="Polaris-Avatar__Svg" viewBox="0 0 40 40"><text x="50%" y="50%" dy="0.35em" fill="currentColor" font-size="20" text-anchor="middle">D</text></svg></span></span></div><span class="Polaris-TopBar-UserMenu__Details">
                    <p class="Polaris-TopBar-UserMenu__Name">Zahid3d29</p>
                    <p class="Polaris-TopBar-UserMenu__Detail">ZedEnd Tech.</p>
                  </span>
                </button></div>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div class="Polaris-Frame__Navigation" id="AppFrameNav">
          <nav class="Polaris-Navigation">
            <div class="Polaris-Navigation__PrimaryNavigation Polaris-Scrollable Polaris-Scrollable--vertical" data-polaris-scrollable="true">
              <ul class="Polaris-Navigation__Section">
                <li class="Polaris-Navigation__ListItem"><button type="button" class="Polaris-Navigation__Item">
                    <div class="Polaris-Navigation__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                          <path d="M17 9H5.414l3.293-3.293a.999.999 0 1 0-1.414-1.414l-5 5a.999.999 0 0 0 0 1.414l5 5a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L5.414 11H17a1 1 0 1 0 0-2" fill-rule="evenodd"></path>
                        </svg></span></div><span class="Polaris-Navigation__Text">Back to Shopify</span>
                  </button></li>
              </ul>
              <ul class="Polaris-Navigation__Section Polaris-Navigation__Section--withSeparator">
                <li class="Polaris-Navigation__SectionHeading"><span class="Polaris-Navigation__Text">Notice Anywhere App</span><button type="button" class="Polaris-Navigation__Action" aria-label="Contact support"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                        <path d="M13 11h2V9h-2v2zm-4 0h2V9H9v2zm-4 0h2V9H5v2zm5-9c-4.411 0-8 3.589-8 8 0 1.504.425 2.908 1.15 4.111l-1.069 2.495a1 1 0 0 0 1.314 1.313l2.494-1.069A7.939 7.939 0 0 0 10 18c4.411 0 8-3.589 8-8s-3.589-8-8-8z" fill-rule="evenodd"></path>
                      </svg></span></button></li>
                <li class="Polaris-Navigation__ListItem"><button type="button" class="Polaris-Navigation__Item">
                    <div class="Polaris-Navigation__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                          <path d="M19.664 8.252l-9-8a1 1 0 0 0-1.328 0L8 1.44V1a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v5.773L.336 8.252a1.001 1.001 0 0 0 1.328 1.496L2 9.449V19a1 1 0 0 0 1 1h14a1 1 0 0 0 1-1V9.449l.336.299a.997.997 0 0 0 1.411-.083 1.001 1.001 0 0 0-.083-1.413zM16 18h-2v-5a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1v5H4V7.671l6-5.333 6 5.333V18zm-8 0v-4h4v4H8zM4 2h2v1.218L4 4.996V2z" fill-rule="evenodd"></path>
                        </svg></span></div><span class="Polaris-Navigation__Text">Settings</span>
                  </button>
                </li>
                <li class="Polaris-Navigation__ListItem"><button type="button" class="Polaris-Navigation__Item">
                    <div class="Polaris-Navigation__Icon"><span class="Polaris-Icon"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                          <path fill="currentColor" d="M1 13h5l1 2h6l1-2h5v6H1z"></path>
                          <path d="M2 18v-4h3.382l.723 1.447c.17.339.516.553.895.553h6c.379 0 .725-.214.895-.553L14.618 14H18v4H2zM19 1a1 1 0 0 1 1 1v17a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h4a1 1 0 0 1 0 2H2v9h4c.379 0 .725.214.895.553L7.618 14h4.764l.723-1.447c.17-.339.516-.553.895-.553h4V3h-3a1 1 0 0 1 0-2h4zM6.293 6.707a.999.999 0 1 1 1.414-1.414L9 6.586V1a1 1 0 0 1 2 0v5.586l1.293-1.293a.999.999 0 1 1 1.414 1.414l-3 3a.997.997 0 0 1-1.414 0l-3-3z" fill-rule="evenodd"></path>
                        </svg></span></div><span class="Polaris-Navigation__Text">Setup Notice</span>
                  </button>
                </li>
              </ul>
            </div>
          </nav><button type="button" class="Polaris-Frame__NavigationDismiss" aria-hidden="true" aria-label="Close navigation" tabindex="-1"><span class="Polaris-Icon Polaris-Icon--colorWhite"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                <path d="M11.414 10l6.293-6.293a.999.999 0 1 0-1.414-1.414L10 8.586 3.707 2.293a.999.999 0 1 0-1.414 1.414L8.586 10l-6.293 6.293a.999.999 0 1 0 1.414 1.414L10 11.414l6.293 6.293a.997.997 0 0 0 1.414 0 .999.999 0 0 0 0-1.414L11.414 10z" fill-rule="evenodd"></path>
              </svg></span></button>
        </div>
      </div>
      <div class="Polaris-Frame__ContextualSaveBar Polaris-Frame-CSSAnimation--startFade"></div>
      <main class="Polaris-Frame__Main" id="AppFrameMain" data-has-global-ribbon="false"><a id="AppFrameMainContent" tabindex="-1"></a>
        <div class="Polaris-Frame__Content">
          <div class="Polaris-Page">
            <div class="Polaris-Page-Header">
              <div class="Polaris-Page-Header__MainContent">
                <div class="Polaris-Page-Header__TitleActionMenuWrapper">
                  <div>
                    <div class="Polaris-Header-Title__TitleAndSubtitleWrapper">
                      <div class="Polaris-Header-Title">
                        <h1 class="Polaris-DisplayText Polaris-DisplayText--sizeLarge">Settings</h1>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <!--First Setting start-->
            <div class="Polaris-Page__Content">
              <div class="Polaris-Layout"><a id="SkipToContentTarget" tabindex="-1"></a>
                <div class="Polaris-Layout__AnnotatedSection">
                  <div class="Polaris-Layout__AnnotationWrapper">
                    <div class="Polaris-Layout__Annotation">
                      <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">First Settings</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                          <p>zedend tech. will use this as your account information.</p>
                        </div>
                      </div>
                    </div>
                    <div class="Polaris-Layout__AnnotationContent">
                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Section">
                          <div class="Polaris-FormLayout">
                            <div class="Polaris-FormLayout__Item">
                              <div class="">
                                <div class="Polaris-Labelled__LabelWrapper">
                                  <div class="Polaris-Label"><label id="PolarisTextField1Label" for="PolarisTextField1" class="Polaris-Label__Text">PLease copy/paste this below code to your desired places. ex: above the product title.</label></div>
                                </div>
                                <div class="Polaris-Connected">
                                  <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                    <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="PolarisTextField1" class="Polaris-TextField__Input" aria-labelledby="PolarisTextField1Label" aria-invalid="false" aria-multiline="false" value="{% render 'shopify://apps/notice-anywhere/snippets/product-notice/91d87de7-fa32-437c-934e-e7b1bb593c2b' %}">
                                      <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="Polaris-FormLayout__Item">
                              <div class="">
                                <div class="Polaris-Labelled__LabelWrapper">
                                  <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Note Below Product Title</label></div>
                                </div>
                                <div class="Polaris-Connected">
                                  <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                    <div class="Polaris-TextField Polaris-TextField--hasValue"><input id="PolarisTextField2" class="Polaris-TextField__Input" type="email" aria-labelledby="PolarisTextField2Label" aria-invalid="false" aria-multiline="false" value="zahid3d9@gmail.com">
                                      <div class="Polaris-TextField__Backdrop"></div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--First Settings end-->
            
            <!--Second Settings start-->
            <div class="Polaris-Page__Content">
              <div class="Polaris-Layout"><a id="SkipToContentTarget" tabindex="-1"></a>
                <div class="Polaris-Layout__AnnotatedSection">
                  <div class="Polaris-Layout__AnnotationWrapper">
                    <div class="Polaris-Layout__Annotation">
                      <div class="Polaris-TextContainer">
                        <h2 class="Polaris-Heading">Second Settings</h2>
                        <div class="Polaris-Layout__AnnotationDescription">
                          <p>Zedend tech. will use this as your account information.</p>
                        </div>
                      </div>
                    </div>
                    <div class="Polaris-Layout__AnnotationContent">
                      <div class="Polaris-Card">
                        <div class="Polaris-Card__Section">
                          <div class="Polaris-FormLayout">
                            <div class="Polaris-FormLayout__Item">
                              <div class="">
                                <div class="Polaris-Labelled__LabelWrapper">
                                  <div class="Polaris-Label"><label id="PolarisTextField1Label" for="PolarisTextField1" class="Polaris-Label__Text">Note Above Product Title</label></div>
                                </div>
                                <div class="Polaris-Connected">
                                  <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                      
                                      
                                      <!-- CREATE  FILE ON SHOPIFY ASSETS -->
                                      
                                    <?php    
                                        
                                         
                                        // $requests = $_GET;
                                        // $hmac = $_GET['hmac'];
                                        // $serializeArray = serialize($requests);
                                        // $requests = array_diff_key($requests, array('hmac' => ''));
                                        // ksort($requests);
                                    
                                        // $token = "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";
                                        // $url = parse_url('https://' . $requests['shop']);
                                        // $host = explode('.', $url['host']);
                                        // $shop = $host[0];

                                    
                                        // $theme = shopify_call($token, $shop, "/admin/api/2020-07/themes.json", array(), 'GET');
                                        // $theme = json_decode($theme['response'], JSON_PRETTY_PRINT);
                                        
                                        // foreach($theme as $cur_theme ){
                                        //     foreach($cur_theme as $key => $value){
                                              
                                        //       if( $value['role'] === 'main'){
                                                   
                                        //             $theme_id = $value['id']; 
                                        //             $theme_role = $value['role'];
                                        //             $theme_name = $value['name'];
                                        //             //$custhtml = '<h2>hello world</h2>';
                                                    
                                        //             $theme_assets = 
                                        //             array(
                                        //                 "asset" => array(
                                        //                     "key" => "snippets/don.liquid",
                                        //                     //"value" => "tHIS IS AN UPDATE"
                                        //                 )    
                                        //             );
                                                    
                                        //             $assets = shopify_call($token, $shop, "/admin/api/2020-04/themes/" . $theme_id . "/assets.json" , $theme_assets, 'PUT');
                                        //             $assets = json_decode($assets['response'], JSON_PRETTY_PRINT);
                                                    
                                        //             echo  print_r($assets);
                                        //       } 
                                                
                                        //     }
                                        // }
                                    

                                         
                                    ?>
                                    
                                    <!-- READ FILE ON SHOPIFY ASSETS -->
                                    <?php    
                                        
                                        // $requests = $_GET;
                                        // $hmac = $_GET['hmac'];
                                        // $serializeArray = serialize($requests);
                                        // $requests = array_diff_key($requests, array('hmac' => ''));
                                        // ksort($requests);
                                    
                                        // $token = "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";
                                        // $url = parse_url('https://' . $requests['shop']);
                                        // $host = explode('.', $url['host']);
                                        // $shop = $host[0];

                                    
                                        // $theme = shopify_call($token, $shop, "/admin/api/2020-07/themes.json", array(), 'GET');
                                        // $theme = json_decode($theme['response'], JSON_PRETTY_PRINT);
                                    
                                        // foreach($theme as $cur_theme ){
                                        //     foreach($cur_theme as $key => $value){
                                                
                                        //         $theme_id = $value['id'];
                                        //         $theme_role = $value['role'];
                                        //         $custom_html = '<h2> I have created this file by shopify admin api </h2> ';
                                                

                                        //         if( $theme_role == 'main'){
                                        //             $theme_assets = 
                                        //                 array(
                                        //                     "asset" => array(

                                        //                     )    
                                        //                 );
                                                        
                                        //                 // for READING file on asset
                                        //                 $assets = shopify_call($token, $shop, "/admin/api/2020-07/themes/" . $theme_id . "/assets.json" , $theme_assets, 'GET');
                                        //                 $assets = json_decode($assets['response'], JSON_PRETTY_PRINT);
                                                        

                                        //         }
                                                
                                        //     }
                                        // }
                                         
                                    ?>
                                    
                                     <!-- UPDATE/REPLACE  FILE'S CONTENT ON SHOPIFY ASSETS -->
                                    <?php    
                                        
                                        // $requests = $_GET;
                                        // $hmac = $_GET['hmac'];
                                        // $serializeArray = serialize($requests);
                                        // $requests = array_diff_key($requests, array('hmac' => ''));
                                        // ksort($requests);
                                    
                                        // $token = "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";
                                        // $url = parse_url('https://' . $requests['shop']);
                                        // $host = explode('.', $url['host']);
                                        // $shop = $host[0];

                                    
                                        // $theme = shopify_call($token, $shop, "/admin/api/2020-07/themes.json", array(), 'GET');
                                        // $theme = json_decode($theme['response'], JSON_PRETTY_PRINT);
                                        
                                        // foreach($theme as $cur_theme ){
                                        //     foreach($cur_theme as $key => $value){
                                              
                                        //       if( $value['role'] === 'main'){
                                                   
                                        //             $theme_id = $value['id']; 
                                        //             $theme_role = $value['role'];
                                                    
                                        //             $custhtml = " Update html content";
                                                    
                                        //             $theme_assets = 
                                        //             array(
                                        //                 "asset" => array(
                                        //                     "key" => "assets/gift-card.js",
                                        //                     "value" => $custhtml
                                        //                 )    
                                        //             );
                                                    
                                        //             $assets = shopify_call($token, $shop, "/admin/api/2020-07/themes/" . $theme_id . "/assets.json" , $theme_assets, 'PUT');
                                        //             $assets = json_decode($assets['response'], JSON_PRETTY_PRINT);
                                                    
                                        //             echo  print_r($assets);
                                        //       } 
                                                
                                        //     }
                                        // }
                                    

                                         
                                    ?>
                                    
                                     <!-- DELETE FILE ON SHOPIFY ASSETS -->
                                     
                                    <?php    
                                        
                                         
                                        // $requests = $_GET;
                                        // $hmac = $_GET['hmac'];
                                        // $serializeArray = serialize($requests);
                                        // $requests = array_diff_key($requests, array('hmac' => ''));
                                        // ksort($requests);
                                    
                                        // $token = "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";
                                        // $url = parse_url('https://' . $requests['shop']);
                                        // $host = explode('.', $url['host']);
                                        // $shop = $host[0];

                                    
                                        // $theme = shopify_call($token, $shop, "/admin/api/2020-07/themes.json", array(), 'GET');
                                        // $theme = json_decode($theme['response'], JSON_PRETTY_PRINT);
                                        
                                        // foreach($theme as $cur_theme ){
                                        //     foreach($cur_theme as $key => $value){
                                              
                                        //             $theme_id = $value['id']; 
                                        //             $theme_role = $value['role'];
                                                    
                                        //             $theme_assets = 
                                        //                 array(
                                        //                     "asset" => array(
                                        //                         // DELETE file from asset
                                        //                         "key" => "snippets/don.liquid"
                                                                
                                        //                     )    
                                        //                 );
                                                    
                                        //              $assets = shopify_call($token, $shop, "/admin/api/2020-07/themes/" . $theme_id . "/assets.json" , $theme_assets, 'DELETE');
                                        //              $assets = json_decode($assets['response'], JSON_PRETTY_PRINT);
                                                    
                                                    
                                                    
                                                    
                                                    
                                        //       if( $value['role'] === 'main'){
                                                   
                                                   
                                                    
                                        //       } 
                                                
                                        //     }
                                        // }
                                    
                                        // echo  print_r($assets);
                                         
                                    ?>
                                    
                                    
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="Polaris-FormLayout__Item">
                              <div class="">
                                <div class="Polaris-Labelled__LabelWrapper">
                                  <div class="Polaris-Label"><label id="PolarisTextField2Label" for="PolarisTextField2" class="Polaris-Label__Text">Note Below Product Title</label></div>
                                </div>
                                <div class="Polaris-Connected">
                                  <div class="Polaris-Connected__Item Polaris-Connected__Item--primary">
                                    <?php                      
                                         echo "hello";
                                          
                                    ?>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Second settings end-->
            
          </div>
        </div>
      </main>
    </div>
  </div>
</div>
<div></div>,<div class="Polaris-Frame-ToastManager" aria-live="polite"></div>,

                   

<div class="footer">
    <div style="--top-bar-background:#00848e; --top-bar-background-lighter:#1d9ba4; --top-bar-color:#f9fafb; --p-frame-offset:0px;">
      <div class="Polaris-FooterHelp">
        <div class="Polaris-FooterHelp__Content">
          <div class="Polaris-FooterHelp__Icon"><span class="Polaris-Icon Polaris-Icon--colorTeal Polaris-Icon--isColored Polaris-Icon--hasBackdrop"><svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                <circle cx="10" cy="10" r="9" fill="currentColor"></circle>
                <path d="M10 0C4.486 0 0 4.486 0 10s4.486 10 10 10 10-4.486 10-10S15.514 0 10 0m0 18c-4.411 0-8-3.589-8-8s3.589-8 8-8 8 3.589 8 8-3.589 8-8 8m0-4a1 1 0 1 0 0 2 1 1 0 1 0 0-2m0-10C8.346 4 7 5.346 7 7a1 1 0 1 0 2 0 1.001 1.001 0 1 1 1.591.808C9.58 8.548 9 9.616 9 10.737V11a1 1 0 1 0 2 0v-.263c0-.653.484-1.105.773-1.317A3.013 3.013 0 0 0 13 7c0-1.654-1.346-3-3-3"></path>
              </svg></span></div>
          <div class="Polaris-FooterHelp__Text">Learn more about <a class="Polaris-Link" href="#" data-polaris-unstyled="true">ZedEnd Technology</a></div>
        </div>
      </div>
    </div>
</div>

  <!-- Bootstrap core JavaScript -->
  
  <!--<script src="vendor/js/jquery.min.js"></script>-->
  <!--<script src="vendor/js/bootstrap.min.js"></script>-->

</body>

</html>
