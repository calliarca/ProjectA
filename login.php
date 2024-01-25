<!DOCTYPE html>
<html lang="english">
  <head>
    <title>Laman Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta property="twitter:card" content="summary_large_image" />

    <style data-tag="reset-style-sheet">
      html {  line-height: 1.15;}body {  margin: 0;}* {  box-sizing: border-box;  border-width: 0;  border-style: solid;}p,li,ul,pre,div,h1,h2,h3,h4,h5,h6,figure,blockquote,figcaption {  margin: 0;  padding: 0;}button {  background-color: transparent;}button,input,optgroup,select,textarea {  font-family: inherit;  font-size: 100%;  line-height: 1.15;  margin: 0;}button,select {  text-transform: none;}button,[type="button"],[type="reset"],[type="submit"] {  -webkit-appearance: button;}button::-moz-focus-inner,[type="button"]::-moz-focus-inner,[type="reset"]::-moz-focus-inner,[type="submit"]::-moz-focus-inner {  border-style: none;  padding: 0;}button:-moz-focus,[type="button"]:-moz-focus,[type="reset"]:-moz-focus,[type="submit"]:-moz-focus {  outline: 1px dotted ButtonText;}a {  color: inherit;  text-decoration: inherit;}input {  padding: 2px 4px;}img {  display: block;}html { scroll-behavior: smooth  }
    </style>
    <style data-tag="default-style-sheet">
      html {
        font-family: Inter;
        font-size: 16px;
      }

      body {
        font-weight: 400;
        font-style:normal;
        text-decoration: none;
        text-transform: none;
        letter-spacing: normal;
        line-height: 1.15;
        color: var(--dl-color-gray-black);
        background-color: var(--dl-color-gray-white);

      }
    </style>
    <link
      rel="stylesheet"
      href="https://unpkg.com/animate.css@4.1.1/animate.css"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap"
      data-tag="font"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/@teleporthq/teleport-custom-scripts/dist/style.css"
    />
  </head>
  <body>
    <link rel="stylesheet" href="./styles/style-login.css" />
    <div>
      <link href="./styles/login.css" rel="stylesheet" />

      <div class="tampilan-login-container">
        <div class="tampilan-login-tampilan-login">
          <span class="tampilan-login-text">
            <span>Dapatkan Aplikasi.</span>
          </span>
          <div class="tampilan-login-footer">
            <span class="tampilan-login-text02">
              <span>©2024 Findmy by Macipir Inc</span>
            </span>
            <span class="tampilan-login-text04"><span>Home</span></span>
            <span class="tampilan-login-text06"><span>Blog</span></span>
            <span class="tampilan-login-text08"><span>Contact</span></span>
            <span class="tampilan-login-text10"><span>About</span></span>
          </div>
          <img
            src="public/external/rectangle8339441-khla-400w.png"
            alt="Rectangle8339441"
            class="tampilan-login-rectangle833"
          />
          <div class="tampilan-login-login">
            <div class="tampilan-login-group1">
              <img
                src="public/external/line19441-6orl.svg"
                alt="Line19441"
                class="tampilan-login-line1"
              />
              <img
                src="public/external/line29441-xs5.svg"
                alt="Line29441"
                class="tampilan-login-line2"
              />
              <span class="tampilan-login-text12"><span>Atau</span></span>
              <span class="tampilan-login-text14">
                <span>Lupa Kata Sandi?</span>
              </span>
            </div>
            <div class="tampilan-login-frame-login">
            <form action="login_handler.php" method="post">
              <div class="tampilan-login-login1">
                <div class="tampilan-login-username">
                  <span class="tampilan-login-text16"><span>Email</span></span>
                  <img
                    src="public/external/rectangle835i944-v0wd.svg"
                    alt="Rectangle835I944"
                    class="tampilan-login-rectangle835"
                  />
                  <span class="tampilan-login-text18">
                    <input
                      type="email"
                      name="email"
                      id="emailInput"
                      class="tampilan-login-text18"
                      placeholder="Ketik Disini"
                    />
                  </span>
                </div>
                <div class="tampilan-login-user03c">
                  <div class="tampilan-login-user03c1">
                    <div class="tampilan-login-group7">
                      <img
                        src="public/external/combinedshapei944-0mop.svg"
                        alt="CombinedShapeI944"
                        class="tampilan-login-combined-shape"
                      />
                      <img
                        src="public/external/path4i944-lf.svg"
                        alt="Path4I944"
                        class="tampilan-login-path4"
                      />
                      <div class="tampilan-login-group6">
                        <img
                          src="public/external/maski944-jzt.svg"
                          alt="MaskI944"
                          class="tampilan-login-mask"
                        />
                        <div class="tampilan-login-group61">
                          <img
                            src="public/external/path2i944-jb5d.svg"
                            alt="Path2I944"
                            class="tampilan-login-path2"
                          />
                        </div>
                      </div>
                      <div class="tampilan-login-combined-shape1">
                        <div class="tampilan-login-combined-shape2">
                          <img
                            src="public/external/maski944-c65b.svg"
                            alt="MaskI944"
                            class="tampilan-login-mask1"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tampilan-login-kata-sandi">
                <div class="tampilan-login-username1">
                  <span class="tampilan-login-text20">
                    <span>Kata Sandi</span>
                  </span>
                  <img
                    src="public/external/rectangle835i944-g5f.svg"
                    alt="Rectangle835I944"
                    class="tampilan-login-rectangle8351"
                  />
                  <span class="tampilan-login-text22">
                    <input
                      type="password"
                      name="password"
                      id="passwordInput"
                      class="tampilan-login-text22"
                      placeholder="Ketik Disini"
                    />
                  </span>
                </div>
                <div class="tampilan-login-user03c2">
                  <div class="tampilan-login-user03c3">
                    <div class="tampilan-login-group71">
                      <img
                        src="public/external/combinedshapei944-y2z.svg"
                        alt="CombinedShapeI944"
                        class="tampilan-login-combined-shape3"
                      />
                      <img
                        src="public/external/path4i944-8ivx.svg"
                        alt="Path4I944"
                        class="tampilan-login-path41"
                      />
                      <div class="tampilan-login-group62">
                        <img
                          src="public/external/maski944-0lm3.svg"
                          alt="MaskI944"
                          class="tampilan-login-mask2"
                        />
                        <div class="tampilan-login-group63">
                          <img
                            src="public/external/path2i944-muzl.svg"
                            alt="Path2I944"
                            class="tampilan-login-path21"
                          />
                        </div>
                      </div>
                      <div class="tampilan-login-combined-shape4">
                        <div class="tampilan-login-combined-shape5">
                          <img
                            src="public/external/maski944-ez4i.svg"
                            alt="MaskI944"
                            class="tampilan-login-mask3"
                          />
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tampilan-login-group11">
                <img
                  src="public/external/ellipse1i132-xx4m-200h.png"
                  alt="Ellipse1I132"
                  class="tampilan-login-ellipse1"
                />
                <span class="tampilan-login-text24">
                  <span>Ingat akun</span>
                </span>
              </div>
            </div>
          </div>
          <span class="tampilan-login-text26"><span>Masuk</span></span>
          <button type="submit" name="login" class="tampilan-login-button">
            <span class="tampilan-login-text28"><span>Masuk</span></span>
          </button>
          <img
            src="public/external/image21615-5hon-200h.png"
            alt="image21615"
            class="tampilan-login-image2"
          />
    </form>
        </div>
      </div>
    </div>
  </body>
</html>
