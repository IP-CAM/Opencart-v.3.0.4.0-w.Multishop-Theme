<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* install/step_2.twig */
class __TwigTemplate_04def4c4001b09ba3aaa97868897cc33 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo ($context["header"] ?? null);
        echo "
<div class=\"container\">
  <header>
    <div class=\"row\">
      <div class=\"col-sm-6\">
        <h1 class=\"pull-left\">2<small>/4</small></h1>
        <h3>";
        // line 7
        echo ($context["heading_title"] ?? null);
        echo "<br/>
          <small>";
        // line 8
        echo ($context["text_step_2"] ?? null);
        echo "</small></h3>
      </div>
      <div class=\"col-sm-6\">
        <div id=\"logo\" class=\"pull-right hidden-xs\"><img src=\"view/image/logo.png\" alt=\"OpenCart\" title=\"OpenCart\" /></div>
      </div>
    </div>
  </header>
  ";
        // line 15
        if (($context["error_warning"] ?? null)) {
            // line 16
            echo "  <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
    <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
  </div>
  ";
        }
        // line 20
        echo "  <div class=\"row\">
    <div class=\"col-sm-9\">
      <form action=\"";
        // line 22
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <p>";
        // line 23
        echo ($context["text_install_php"] ?? null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 28
        echo ($context["text_setting"] ?? null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 29
        echo ($context["text_current"] ?? null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 30
        echo ($context["text_required"] ?? null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 31
        echo ($context["text_status"] ?? null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 36
        echo ($context["text_version"] ?? null);
        echo "</td>
                <td>";
        // line 37
        echo ($context["php_version"] ?? null);
        echo "</td>
                <td>7.3+</td>
                <td class=\"text-center\">";
        // line 39
        if ((($context["php_version"] ?? null) >= "7.3")) {
            // line 40
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 42
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 43
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 46
        echo ($context["text_global"] ?? null);
        echo "</td>
                <td>";
        // line 47
        if (($context["register_globals"] ?? null)) {
            // line 48
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 50
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 51
        echo "</td>
                <td>";
        // line 52
        echo ($context["text_off"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 53
        if ( !($context["register_globals"] ?? null)) {
            // line 54
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 56
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 57
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 60
        echo ($context["text_magic"] ?? null);
        echo "</td>
                <td>";
        // line 61
        if (($context["magic_quotes_gpc"] ?? null)) {
            // line 62
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 64
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 65
        echo "</td>
                <td>";
        // line 66
        echo ($context["text_off"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 67
        if ( !($context["error_magic_quotes_gpc"] ?? null)) {
            // line 68
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 70
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 71
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 74
        echo ($context["text_file_upload"] ?? null);
        echo "</td>
                <td>";
        // line 75
        if (($context["file_uploads"] ?? null)) {
            // line 76
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 78
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 79
        echo "</td>
                <td>";
        // line 80
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 81
        if (($context["file_uploads"] ?? null)) {
            // line 82
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 84
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 85
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 88
        echo ($context["text_session"] ?? null);
        echo "</td>
                <td>";
        // line 89
        if (($context["session_auto_start"] ?? null)) {
            // line 90
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 92
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 93
        echo "</td>
                <td>";
        // line 94
        echo ($context["text_off"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 95
        if ( !($context["session_auto_start"] ?? null)) {
            // line 96
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 98
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 99
        echo "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 104
        echo ($context["text_install_extension"] ?? null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td width=\"35%\"><b>";
        // line 109
        echo ($context["text_extension"] ?? null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 110
        echo ($context["text_current"] ?? null);
        echo "</b></td>
                <td width=\"25%\"><b>";
        // line 111
        echo ($context["text_required"] ?? null);
        echo "</b></td>
                <td width=\"15%\" class=\"text-center\"><b>";
        // line 112
        echo ($context["text_status"] ?? null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 117
        echo ($context["text_db"] ?? null);
        echo "</td>
                <td>";
        // line 118
        if (($context["db"] ?? null)) {
            // line 119
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 121
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 122
        echo "</td>
                <td>";
        // line 123
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 124
        if (($context["db"] ?? null)) {
            // line 125
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 127
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 128
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 131
        echo ($context["text_gd"] ?? null);
        echo "</td>
                <td>";
        // line 132
        if (($context["gd"] ?? null)) {
            // line 133
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 135
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 136
        echo "</td>
                <td>";
        // line 137
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 138
        if (($context["gd"] ?? null)) {
            // line 139
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 141
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 142
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 145
        echo ($context["text_curl"] ?? null);
        echo "</td>
                <td>";
        // line 146
        if (($context["curl"] ?? null)) {
            // line 147
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 149
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 150
        echo "</td>
                <td>";
        // line 151
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 152
        if (($context["curl"] ?? null)) {
            // line 153
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 155
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 156
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 159
        echo ($context["text_openssl"] ?? null);
        echo "</td>
                <td>";
        // line 160
        if (($context["openssl"] ?? null)) {
            // line 161
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 163
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 164
        echo "</td>
                <td>";
        // line 165
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 166
        if (($context["openssl"] ?? null)) {
            // line 167
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 169
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 170
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 173
        echo ($context["text_zlib"] ?? null);
        echo "</td>
                <td>";
        // line 174
        if (($context["zlib"] ?? null)) {
            // line 175
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 177
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 178
        echo "</td>
                <td>";
        // line 179
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 180
        if (($context["zlib"] ?? null)) {
            // line 181
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 183
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 184
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 187
        echo ($context["text_zip"] ?? null);
        echo "</td>
                <td>";
        // line 188
        if (($context["zip"] ?? null)) {
            // line 189
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 191
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 192
        echo "</td>
                <td>";
        // line 193
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 194
        if (($context["zip"] ?? null)) {
            // line 195
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 197
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 198
        echo "</td>
              </tr>
              ";
        // line 200
        if ( !($context["iconv"] ?? null)) {
            // line 201
            echo "              <tr>
                <td>";
            // line 202
            echo ($context["text_mbstring"] ?? null);
            echo "</td>
                <td>";
            // line 203
            if (($context["mbstring"] ?? null)) {
                // line 204
                echo "                  ";
                echo ($context["text_on"] ?? null);
                echo "
                  ";
            } else {
                // line 206
                echo "                  ";
                echo ($context["text_off"] ?? null);
                echo "
                  ";
            }
            // line 207
            echo "</td>
                <td>";
            // line 208
            echo ($context["text_on"] ?? null);
            echo "</td>
                <td class=\"text-center\">";
            // line 209
            if (($context["mbstring"] ?? null)) {
                // line 210
                echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
            } else {
                // line 212
                echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
            }
            // line 213
            echo "</td>
              </tr>
              ";
        }
        // line 216
        echo "              <tr>
                <td>";
        // line 217
        echo ($context["text_dom"] ?? null);
        echo "</td>
                <td>";
        // line 218
        if (($context["dom"] ?? null)) {
            // line 219
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 221
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 222
        echo "</td>
                <td>";
        // line 223
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 224
        if (($context["dom"] ?? null)) {
            // line 225
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 227
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 228
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 231
        echo ($context["text_hash"] ?? null);
        echo "</td>
                <td>";
        // line 232
        if (($context["hash"] ?? null)) {
            // line 233
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 235
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 236
        echo "</td>
                <td>";
        // line 237
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 238
        if (($context["hash"] ?? null)) {
            // line 239
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 241
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 242
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 245
        echo ($context["text_xmlwriter"] ?? null);
        echo "</td>
                <td>";
        // line 246
        if (($context["xmlwriter"] ?? null)) {
            // line 247
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 249
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 250
        echo "</td>
                <td>";
        // line 251
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 252
        if (($context["xmlwriter"] ?? null)) {
            // line 253
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 255
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 256
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 259
        echo ($context["text_json"] ?? null);
        echo "</td>
                <td>";
        // line 260
        if (($context["json"] ?? null)) {
            // line 261
            echo "                  ";
            echo ($context["text_on"] ?? null);
            echo "
                  ";
        } else {
            // line 263
            echo "                  ";
            echo ($context["text_off"] ?? null);
            echo "
                  ";
        }
        // line 264
        echo "</td>
                <td>";
        // line 265
        echo ($context["text_on"] ?? null);
        echo "</td>
                <td class=\"text-center\">";
        // line 266
        if (($context["json"] ?? null)) {
            // line 267
            echo "                  <span class=\"text-success\"><i class=\"fa fa-check-circle\"></i></span>
                  ";
        } else {
            // line 269
            echo "                  <span class=\"text-danger\"><i class=\"fa fa-minus-circle\"></i></span>
                  ";
        }
        // line 270
        echo "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 275
        echo ($context["text_install_file"] ?? null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td><b>";
        // line 280
        echo ($context["text_file"] ?? null);
        echo "</b></td>
                <td><b>";
        // line 281
        echo ($context["text_status"] ?? null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 286
        echo ($context["catalog_config"] ?? null);
        echo "</td>
                <td>";
        // line 287
        if ( !($context["error_catalog_config"] ?? null)) {
            // line 288
            echo "                  <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 290
            echo "                  <span class=\"text-danger\">";
            echo ($context["error_catalog_config"] ?? null);
            echo "</span>
                  ";
        }
        // line 291
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 294
        echo ($context["admin_config"] ?? null);
        echo "</td>
                <td>";
        // line 295
        if ( !($context["error_admin_config"] ?? null)) {
            // line 296
            echo "                  <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 298
            echo "                  <span class=\"text-danger\">";
            echo ($context["error_admin_config"] ?? null);
            echo "</span>
                  ";
        }
        // line 299
        echo "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <p>";
        // line 304
        echo ($context["text_install_directory"] ?? null);
        echo "</p>
        <fieldset>
          <table class=\"table\">
            <thead>
              <tr>
                <td align=\"left\"><b>";
        // line 309
        echo ($context["text_directory"] ?? null);
        echo "</b></td>
                <td align=\"left\"><b>";
        // line 310
        echo ($context["text_status"] ?? null);
        echo "</b></td>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>";
        // line 315
        echo ($context["image"] ?? null);
        echo "/</td>
                <td>";
        // line 316
        if ( !($context["error_image"] ?? null)) {
            // line 317
            echo "                  <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 319
            echo "                  <span class=\"text-danger\">";
            echo ($context["error_image"] ?? null);
            echo "</span>
                  ";
        }
        // line 320
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 323
        echo ($context["image_cache"] ?? null);
        echo "/</td>
                <td>";
        // line 324
        if ( !($context["error_image_cache"] ?? null)) {
            // line 325
            echo "                  <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 327
            echo "                  <span class=\"text-danger\">";
            echo ($context["error_image_cache"] ?? null);
            echo "</span>
                  ";
        }
        // line 328
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 331
        echo ($context["image_catalog"] ?? null);
        echo "/</td>
                <td>";
        // line 332
        if ( !($context["error_image_catalog"] ?? null)) {
            // line 333
            echo "                  <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 335
            echo "                  <span class=\"text-danger\">";
            echo ($context["error_image_catalog"] ?? null);
            echo "</span>
                  ";
        }
        // line 336
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 339
        echo ($context["cache"] ?? null);
        echo "/</td>
                <td>";
        // line 340
        if ( !($context["error_cache"] ?? null)) {
            // line 341
            echo "                  <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 343
            echo "                  <span class=\"text-danger\">";
            echo ($context["error_cache"] ?? null);
            echo "</span>
                  ";
        }
        // line 344
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 347
        echo ($context["logs"] ?? null);
        echo "/</td>
                <td>";
        // line 348
        if ( !($context["error_logs"] ?? null)) {
            // line 349
            echo "                  <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 351
            echo "                  <span class=\"text-danger\">";
            echo ($context["error_logs"] ?? null);
            echo "</span>
                  ";
        }
        // line 352
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 355
        echo ($context["download"] ?? null);
        echo "/</td>
                <td>";
        // line 356
        if ( !($context["error_download"] ?? null)) {
            // line 357
            echo "                  <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 359
            echo "                  <span class=\"text-danger\">";
            echo ($context["error_download"] ?? null);
            echo "</span>
                  ";
        }
        // line 360
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 363
        echo ($context["upload"] ?? null);
        echo "/</td>
                <td>";
        // line 364
        if ( !($context["error_upload"] ?? null)) {
            // line 365
            echo "                  <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 367
            echo "                  <span class=\"text-danger\">";
            echo ($context["error_upload"] ?? null);
            echo "</span>
                  ";
        }
        // line 368
        echo "</td>
              </tr>
              <tr>
                <td>";
        // line 371
        echo ($context["modification"] ?? null);
        echo "/</td>
                <td>";
        // line 372
        if ( !($context["error_modification"] ?? null)) {
            // line 373
            echo "                  <span class=\"text-success\">";
            echo ($context["text_writable"] ?? null);
            echo "</span>
                  ";
        } else {
            // line 375
            echo "                  <span class=\"text-danger\">";
            echo ($context["error_modification"] ?? null);
            echo "</span>
                  ";
        }
        // line 376
        echo "</td>
              </tr>
            </tbody>
          </table>
        </fieldset>
        <div class=\"buttons\">
          <div class=\"pull-left\"><a href=\"";
        // line 382
        echo ($context["back"] ?? null);
        echo "\" class=\"btn btn-default\">";
        echo ($context["button_back"] ?? null);
        echo "</a></div>
          <div class=\"pull-right\">
            <input type=\"submit\" value=\"";
        // line 384
        echo ($context["button_continue"] ?? null);
        echo "\" class=\"btn btn-primary\" />
          </div>
        </div>
      </form>
    </div>
    <div class=\"col-sm-3\">";
        // line 389
        echo ($context["column_left"] ?? null);
        echo "</div>
  </div>
</div>
";
        // line 392
        echo ($context["footer"] ?? null);
        echo "
";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "install/step_2.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  1065 => 392,  1059 => 389,  1051 => 384,  1044 => 382,  1036 => 376,  1030 => 375,  1024 => 373,  1022 => 372,  1018 => 371,  1013 => 368,  1007 => 367,  1001 => 365,  999 => 364,  995 => 363,  990 => 360,  984 => 359,  978 => 357,  976 => 356,  972 => 355,  967 => 352,  961 => 351,  955 => 349,  953 => 348,  949 => 347,  944 => 344,  938 => 343,  932 => 341,  930 => 340,  926 => 339,  921 => 336,  915 => 335,  909 => 333,  907 => 332,  903 => 331,  898 => 328,  892 => 327,  886 => 325,  884 => 324,  880 => 323,  875 => 320,  869 => 319,  863 => 317,  861 => 316,  857 => 315,  849 => 310,  845 => 309,  837 => 304,  830 => 299,  824 => 298,  818 => 296,  816 => 295,  812 => 294,  807 => 291,  801 => 290,  795 => 288,  793 => 287,  789 => 286,  781 => 281,  777 => 280,  769 => 275,  762 => 270,  758 => 269,  754 => 267,  752 => 266,  748 => 265,  745 => 264,  739 => 263,  733 => 261,  731 => 260,  727 => 259,  722 => 256,  718 => 255,  714 => 253,  712 => 252,  708 => 251,  705 => 250,  699 => 249,  693 => 247,  691 => 246,  687 => 245,  682 => 242,  678 => 241,  674 => 239,  672 => 238,  668 => 237,  665 => 236,  659 => 235,  653 => 233,  651 => 232,  647 => 231,  642 => 228,  638 => 227,  634 => 225,  632 => 224,  628 => 223,  625 => 222,  619 => 221,  613 => 219,  611 => 218,  607 => 217,  604 => 216,  599 => 213,  595 => 212,  591 => 210,  589 => 209,  585 => 208,  582 => 207,  576 => 206,  570 => 204,  568 => 203,  564 => 202,  561 => 201,  559 => 200,  555 => 198,  551 => 197,  547 => 195,  545 => 194,  541 => 193,  538 => 192,  532 => 191,  526 => 189,  524 => 188,  520 => 187,  515 => 184,  511 => 183,  507 => 181,  505 => 180,  501 => 179,  498 => 178,  492 => 177,  486 => 175,  484 => 174,  480 => 173,  475 => 170,  471 => 169,  467 => 167,  465 => 166,  461 => 165,  458 => 164,  452 => 163,  446 => 161,  444 => 160,  440 => 159,  435 => 156,  431 => 155,  427 => 153,  425 => 152,  421 => 151,  418 => 150,  412 => 149,  406 => 147,  404 => 146,  400 => 145,  395 => 142,  391 => 141,  387 => 139,  385 => 138,  381 => 137,  378 => 136,  372 => 135,  366 => 133,  364 => 132,  360 => 131,  355 => 128,  351 => 127,  347 => 125,  345 => 124,  341 => 123,  338 => 122,  332 => 121,  326 => 119,  324 => 118,  320 => 117,  312 => 112,  308 => 111,  304 => 110,  300 => 109,  292 => 104,  285 => 99,  281 => 98,  277 => 96,  275 => 95,  271 => 94,  268 => 93,  262 => 92,  256 => 90,  254 => 89,  250 => 88,  245 => 85,  241 => 84,  237 => 82,  235 => 81,  231 => 80,  228 => 79,  222 => 78,  216 => 76,  214 => 75,  210 => 74,  205 => 71,  201 => 70,  197 => 68,  195 => 67,  191 => 66,  188 => 65,  182 => 64,  176 => 62,  174 => 61,  170 => 60,  165 => 57,  161 => 56,  157 => 54,  155 => 53,  151 => 52,  148 => 51,  142 => 50,  136 => 48,  134 => 47,  130 => 46,  125 => 43,  121 => 42,  117 => 40,  115 => 39,  110 => 37,  106 => 36,  98 => 31,  94 => 30,  90 => 29,  86 => 28,  78 => 23,  74 => 22,  70 => 20,  62 => 16,  60 => 15,  50 => 8,  46 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "install/step_2.twig", "");
    }
}
