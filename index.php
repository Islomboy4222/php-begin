<!DOCTYPE html>
<html>
    <head>
        <title>My first website</title>  <!--vebsayt nomi-->
    </head> <!--bosh qismi-->

    <body>
        <h1 align="center">Header One</h1> <!--mavzu-->

        <img src = "‪+998 93 749 90 74‬ 20151013_212656.JPG" width="200" height="300">

        <p>Bugun haftaning 4-kuni. <strong>Bugun</strong> xavo yaqshi</p> <!--sarlavha-->
        
        <a href = "https//google.com" target="_blank">GOOGLE</a> <!--google ga giradi-->
        
                <!-- comment yozish uchun ishlatiadi-->

        <p>Xarajatla</p>
        <ul>
            <li>Kartoshka</li>
            <li>Piyoz</li>
            <li>Go'sht</li>
            <li>Burunch</li>
        </ul>

        <ol>
            <li>Kartoshka</li>
            <li>Piyoz</li>
            <li>Go'sht</li>
            <li>Burunch</li>
        </ol>

        <table>

            <thead>
                <tr>
                    <th>Ismi</th>
                    <th>Email</th>
                    <th>Telefon nomeri</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Abror</td>
                    <td>abror@gmail.com</td>
                    <td>942330011</td>
                </tr>

                <tr>
                    <td>Otaxon Mirzo</td>
                    <td>otaxonmirzo@gmail.com</td>
                    <td>943120066</td>
                </tr>
            </tbody>
        </table>

        <br> <!--keyingi xatorga tushadi-->
        <hr> <!--tagi chiziq-->

        <form>

            <label for = "fname">
                Ismni yozing:
                <input type= "text" placeholder="Ismigizni yozing" id = "fname" name = "fname" />
            </label>
            
            <label for = "age">
                Yoshni yozing:
                <input type="number" placeholder="Yoshigizni yozing" id = "age"  />
            </label>

            <br>
            <br>

            <label for = "parol">
                Parol yozing:
                <input type="password" placeholder="Parol yozing" id = "parol" />
            </label>

            <label for = "turmush qurganmi">
                Turmush qurganmi:
                <input type="checkbox" id = "turmush qurganmi" />
            </label>

            <br>

            <label for = "jins">
                Jins:
                <input type="radio" id = "jins" name="jins" />
                <input type="radio" id = "jins" name="jins" />
            </label>

            <br>

            <label for = "qayerdansiz">
                Qayerdansiz?
                <select name="qayerdansiz" id="qayerdansiz">
                    <option value = "us"> USA </option>
                    <option value = "ru"> RUS </option>
                    <option value = "uz"> UZB </option>
                </select>
            </label>

        </form>
    </body>
</html>
