<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Top</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../vendor/css/main.css">

</head>

<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="content_top row">
                <div class="col-12 top_content_main form1_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <a href="\"><img src="../vendor/img/img_form1.png" alt=""></a>
                                <div class="form1_description">
                                    <h3>国際養鶏養豚総合展2021「資料事前申込み」フォーム</h3>
                                    <p>下記フォームへ必要事項を入力し、送信ボタンを押してください。</p>
                                    <p>資料送付の手続きをします。</p>
                                    <p style="color:#cc0000;">（出展案内ができ次第郵送させていただきます。）</p>
                                </div>
                                @if(session()->has('message'))
                                <div class="form1_error text-center"> {{ session()->get('message') }}</div>
                                @endif
                                <div class="form1_form_content">
                                    <p><span style="color: #cc0000;">* </span><span style="font-weight:bold; font-size:12px;">は必須項目です</span></p>
                                    <form action="" method="POST">
                                        @csrf
                                        <table>
                                            <tr>
                                                <td>
                                                    <label for="field1">姓</label>
                                                    <input type="text" name="field1" id="field1">
                                                    <label for="field2">名</label>
                                                    <input type="text" name="field2" id="field2">
                                                    @if ($errors->has('field1'))
                                                    <div class="error">
                                                        {{ $errors->first('field1') }}
                                                    </div>
                                                    @endif
                                                    @if ($errors->has('field2'))
                                                    <div class="error">
                                                        {{ $errors->first('field2') }}
                                                    </div>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="field3">会社名</label>
                                                    <input type="text" name="field3" id="field3">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="field4">所属部署</label>
                                                    <input type="text" name="field4" id="field4">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="field5"><span style="color: #ff0000;">*</span> Eメールアドレス</label>
                                                    <input type="text" name="field5" id="field5">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="field6"><span style="color: #ff0000;">*</span> Eメールアドレス</label>
                                                    <input type="text" name="field6" id="field6">(確認用)
                                                    @if ($errors->has('field5'))
                                                    <div class="error">
                                                        {{ $errors->first('field5') }}
                                                    </div>
                                                    @endif
                                                    @if ($errors->has('field6'))
                                                    <div class="error">
                                                        {{ $errors->first('field6') }}
                                                    </div>
                                                    @endif
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="submit" name="submit" id="form1_submit" value="確認画面へ">
                                                </td>
                                            </tr>
                                        </table>
                                    </form>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>