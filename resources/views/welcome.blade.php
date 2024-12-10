<style>
        h1 {
            color: #191970;
            text-align:center;
            margin: 100px;
            font-family:"Arial,sans-serif";
            font-size: 2cm;
            margin-bottom: 60px; 
        }

        body { 
            background-color: #c5eff7;
            text-align:center;
        }

        button {
            padding:  10px 30px;
            background-color: pink; 
            color: navy;
            border-color :black;
            border-radius: 4px;
            cursor: pointer;
            font-size: 20px;
        }

        footer {
            position: absolute;
            bottom: 0;
            width: 100%;
            color: black;
            text-align: center;
            font-size: 20px;
            
        }

        .orange {
            color: orange;
        }

        .blue {
            color: blue;
        }

</style>

<h1>Selamat Datang</h1>
<body>
      <!-- Tombol sederhana --> 
       
      
    <form method="POST" action="process.php">

        <button style="margin-right: 20px;" type="button" onclick="window.location.href='/daftar'">Daftar </button>
        <button style="margin-right: 20px;" type="button" onclick="window.location.href='/login'">Login </button>

    </form> 
  
</body>

  <footer>
    <p>Created by <br>Asyifa Rindu Hatini,
        <span class="orange">MI22B,</span> 
        <span class="blue">2257401051</span> 
    </p>
  </footer>

 