<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/img/brush-pen-in-shield-669ld.png">
	<link rel="shortcut icon" href="/img/brush-pen-in-shield-669ld.ico">
    <link rel="stylesheet" href="/css/style.css">
    <title>E-School Vardenik</title>
</head>
<body>
    
    <div class="nav">
    <h1 id="first_title">E-School <sub>Vardenik</sub></h1>
    <button onclick="{myFunction()}" id="Courses" href="#">Դասընթացներ</button>
    <button onclick="{ScrollToNews()}" id="Olympiads" href="#">Օլիմպիադաներ</button>
    <button onclick="{ScrollToHelp()}" id="Exams" href="#">Քննություններ</button>
    <button onclick="{SscrollToHelp()}" id="teachers" href="#">Ուսուցիչներ</button>
    <button onclick="{S2crollToHelp()}" id="StudentCouncil" href="#">Աշակերտական խորհուրդ</button>
    <button onclick="{ScrollToCounter()}" id="Address" href="#">Քարորդի հաշվիչ</button>
    <button onclick="{DropDown()}" id="menu">☰</button>
    <div id="dropdown" class="dropdown">
    <button onclick="{myFunction()}" id="Courses1" href="#">Դասընթացներ</button>
    <button onclick="{ScrollToNews()}" id="Olympiads1" href="#">Օլիմպիադաներ</button>
    <button onclick="{ScrollToHelp()}" id="Exams1" href="#">Քննություններ</button>
    <button onclick="{SscrollToHelp()}" id="teachers1" href="#">Ուսուցիչներ</button>
    <button onclick="{S2crollToHelp()}" id="StudentCouncil1" href="#">Աշակերտական խորհուրդ</button>
    <button onclick="{ScrollToCounter()}" id="Address1" href="#">Քարորդի հաշվիչ</button>
    </div>
    </div>
    <div class="custom-select">
        <h2 id="courses">Դասընթացներ</h2>
        <strong id="courses_info">!Դասը ընտրելու համար սեղմեք տեսացանկի վրա!</strong>
        <h3>1 դասարան (Տարրական)</h3>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/hnE8qj-iAb4?list=PLy-0ChQHj5K_okWSyj10B9ebwZq4N7eow" title="Մայրենի․ Վագրն ու աղվեսը, 1-ին դասարան" frameborder="2" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>2 դասարան (Տարրական)</h3>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/XsZ_VcIHX0Y?list=PLy-0ChQHj5K-ETv2imtwTht59Pf44GSvO" title="Մաթեմատիկա․ Եռանիշ թվերի գումարումն ու հանումը սյունակով․ 2-րդ դասարան" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>3 դասարան (Տարրական)</h3>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/WVBNYLo4KBU?list=PLy-0ChQHj5K91vT6AEpNVID5lX0tkvbQ7" title="English․ There is/There are․ III grade" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>4 դասարան (Հիմնական)</h3>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/bCDXcIwc-DY?list=PLy-0ChQHj5K_0hs_JqBvG2vwSsGlaJAOu" title="FRANÇAIS.  Les sports et les jeux" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>5 դասարան (Հիմնական)</h3>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/L79qeb56ljY?list=PLy-0ChQHj5K__V1HC1pofZdUl_0eRkrAs" title="Русский язык. Беспорядок в комнате" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>6 դասարան (Հիմնական)</h3>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/nOPfpWGfXe8?list=PLy-0ChQHj5K81CVg_jaHWDRiKCDeT8qFj" title="Հայրենագիտություն, Կենսաբանություն․ Որդան կարմիր" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>7 դասարան (Հիմնական)</h3>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/Ywosuu78hGY" title="Deutsch. Reflexive Verben.  Անդրադարձ բայեր. 7  Klasse" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>8 դասարան (Հիմնական)</h3>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/Q7PJaA2ewWw?list=PLy-0ChQHj5K9KlWgbNP1z7-qduSzqtVPH" title="Գրականություն․ Հովհաննես Թումանյանի «Թմկաբերդի առումը» պոեմը․ VIII դասարան" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <h3>9 դասարան (Հիմնական)</h3>
        <iframe width="500" height="300" src="https://www.youtube.com/embed/g7IHyygUyRg?list=PLy-0ChQHj5K-REV3m47wsAwuxy-cuchnZ" title="Գրականություն․ Սայաթ Նովայի արվեստը  IX դասարան" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
</div>
<div class="olympiad_div">
    <h2 id="olympiad_h2">Օլիմպիադաներ</h2>
    <p id="olimp_info"> Օլիմպիադաների ամբողջական շտեմարանը - <a id="olymp_link" target="_blank" href="https://olymp.am/hy/olympiads/all">ԱՅՍՏԵՂ</a></p>
</div>
<div class="exams_info" id="exams_scroll">
    <h2>Քննություններ</h2>
    <a href="http://lib.ysu.am/disciplines_bk/14c4f679f90ede6e1bf23f1fa30dc466.pdf" target="_blank">Մայրենի 4 դասարան (գիրք)</a>
    <a href="https://forms.gle/9bTZ1XEmUxZtZuKE7" target="_blank">Մաթեմատիկա 4 դասարան (թեստ)</a>
    <a href="https://old-lib.armedu.am/resource/17145" target="_blank">«Ռուսաց լեզու» առարկայի ավարտական քննության հարցատոմսեր, 9-րդ դասարան</a>
    <a href="https://old-lib.armedu.am/resource/17364" target="_blank">«Անգլերեն լեզու» առարկայի ավարտական քննության հարցատոմսեր, 9-րդ դասարան</a>
    <a href="https://old-lib.armedu.am/resource/17719" target="_blank">«Գրականություն» առարկայի ավարտական քննության հարցատոմսեր, 9-րդ դասարան</a>
    <a href="https://old-lib.armedu.am/resource/17718" target="_blank">«Հայոց պատմություն» առարկայի ավարտական քննության հարցատոմսեր, 9-րդ դասարան</a>
    <a href="https://dimord.am/public/newatc/pdf/tester/5/5_1.pdf" target="_blank">«Աշխարհագրություն» առարկայի ավարտական քննության հարցատոմսեր, 9-րդ դասարան</a>
    <a href="https://dimord.am/public/newatc/pdf/tester/1/1_1.pdf" target="_blank">«Հայոց լեզու և Գրականություն» առարկայի ավարտական քննության հարցատոմսեր, 9-րդ դասարան</a>
    <a href="https://dimord.am/public/newatc/pdf/tester/15/15_1.pdf" target="_blank">«Ֆիզիկա» առարկայի ավարտական քննության հարցատոմսեր, 9-րդ դասարան</a>
    <a href="https://dimord.am/public/newatc/pdf/tester/11/11_1.pdf" target="_blank">«Քիմիա» առարկայի ավարտական քննության հարցատոմսեր, 9-րդ դասարան</a>
    <a href="https://dimord.am/public/newatc/pdf/tester/7/7_1.pdf" target="_blank">«Կենսաբանություն» առարկայի ավարտական քննության հարցատոմսեր, 9-րդ դասարան</a>
</div>
<div class="teachers">
    <h2 id="teachers_scroll">Ուսուցիչներ</h2>
    <table width="637" border="2">
        <tbody>
        <tr>
        <td>№</td>
        <td>Անուն,ազգանուն</td>
        <td>Դասավանդող առարկան</td>
        </tr>
        <tr>
        <td>1</td>
        <td>Գրիգորյան Լյալյա</td>
        <td>Հայոց լեզու և հայ գրականություն</td>
        </tr>
        <tr>
        <td>2</td>
        <td>Հազեյան Զոյա</td>
        <td>Հայոց լեզու և հայ գրականություն</td>
        </tr>
        <tr>
        <td>3</td>
        <td>Մանուկյան Մարինե</td>
        <td>Հայոց լեզու և հայ գրականություն</td>
        </tr>
        <tr>
        <td>4</td>
        <td>Օհանյան Զարիկ</td>
        <td>Ռուսաց լեզու</td>
        </tr>
        <tr>
        <td>5</td>
        <td>Աթայան Նունե</td>
        <td>Ռուսաց լեզու</td>
        </tr>
        <tr>
        <td>6</td>
        <td>Հովհաննիսյան Տաթևիկ</td>
        <td>Ռուսաց լեզու</td>
        </tr>
        <tr>
        <td>7</td>
        <td>Կիրակոսյան Արմինե</td>
        <td>Անգլերեն լեզու</td>
        </tr>
        <tr>
        <td>8</td>
        <td>Պողոսյան Թոռնիկ</td>
        <td>Մաթեմատիկա և շախմատ</td>
        </tr>
        <tr>
        <td>9</td>
        <td>Ֆերոյան Արմենուհի</td>
        <td>Մաթեմատիկա</td>
        </tr>
        <tr>
        <td>10</td>
        <td>Ղազարյան Մարգարիտ</td>
        <td>Աշխարհագրություն</td>
        </tr>
        <tr>
        <td>11</td>
        <td>Աբրոյան Գևորգ</td>
        <td>Պատմություն</td>
        </tr>
        <tr>
        <td>12</td>
        <td>Կարապետյան Նարինե</td>
        <td>Քիմիա և բնագիտություն</td>
        </tr>
        <tr>
        <td>13</td>
        <td>Պետրոսյան Նելլի</td>
        <td>Կենսաբանություն&nbsp;և բնագիտություն</td>
        </tr>
        <tr>
        <td>14</td>
        <td>Շահբազյան Սուսաննա</td>
        <td>Տեխնոլոգիա</td>
        </tr>
        <tr>
        <td>15</td>
        <td>Աբրոյան Աղավնի</td>
        <td>Կերպարվեստ</td>
        </tr>
        <tr>
        <td>16</td>
        <td>Սաֆարյան Մանուկ</td>
        <td>Զինղեկ,Նզպ</td>
        </tr>
        <tr>
        <td>17</td>
        <td>Նադարյան Գոհար</td>
        <td>Ֆիզկուլտուրա</td>
        </tr>
        <tr>
        <td>18</td>
        <td>Ավետիսյան Գրիգոր</td>
        <td>Ֆիզկուլտուրա</td>
        </tr>
        <tr>
        <td>19</td>
        <td>Սերոբյան Սուսաննա</td>
        <td>Դասվար</td>
        </tr>
        <tr>
        <td>20</td>
        <td>Աբրոյան Ֆլորա</td>
        <td>Դասվար</td>
        </tr>
        <tr>
        <td>21</td>
        <td>Հարությունյան Մարիետա</td>
        <td>Դասվար</td>
        </tr>
        <tr>
        <td>22</td>
        <td>Շահբազյան Գայանե</td>
        <td>Դասվար</td>
        </tr>
        <tr>
        <td>23</td>
        <td>Հովհաննիսյան Սիլվարդ</td>
        <td>Դասվար</td>
        </tr>
        <tr>
        <td>24</td>
        <td>Մկրտչյան Անուշ</td>
        <td>Դասվար</td>
        </tr>
        <tr>
        <td>25</td>
        <td>Սևոյան Գյուլնարա</td>
        <td>Երգ</td>
        </tr>
        <tr>
        <td>26</td>
        <td>Կիրակոսյան Կամո</td>
        <td>Ինֆորմատիկա</td>
        </tr>
        </tbody>
        </table>
</div>
    <div class="StudentCouncil" id="student_council_scroll">
        <h2>Աշակերտական խորհուրդ</h2>
        <table style="height: 579px" width="665" border="1">
            <tbody>
            <tr>
            <td width="31"><strong>№</strong></td>
            <td width="217"><strong>Անուն,ազգանուն</strong></td>
            <td width="113"><strong>Դասարան</strong></td>
            <td width="123"><strong>Պաշտոն</strong></td>
            </tr>
            <tr>
            <td width="31">1</td>
            <td width="217">Սարգսյան Նարեկ</td>
            <td width="113">9</td>
            <td width="123">նախագահ</td>
            </tr>
            <tr>
            <td width="31">2</td>
            <td width="217">Vacantion</td>
            <td width="113">Vacantion</td>
            <td width="123">նախ․ տեղակալ</td>
            </tr>
            <tr>
            <td width="31">3</td>
            <td width="217">Vacantion</td>
            <td width="113">Vacantion</td>
            <td width="123">անդամ</td>
            </tr>
            <tr>
            <td width="31">4</td>
            <td width="217">Vacantion</td>
            <td width="113">Vacantion</td>
            <td width="123">անդամ</td>
            </tr>
            <tr>
            <td width="31">5</td>
            <td width="217">Vacantion</td>
            <td width="113">Vacantion</td>
            <td width="123">անդամ</td>
            </tr>
            <tr>
            <td width="31">6</td>
            <td width="217">Vacantion</td>
            <td width="113">Vacantion</td>
            <td width="123">անդամ</td>
            </tr>
            <tr>
            <td width="31">7</td>
            <td width="217">Vacantion</td>
            <td width="113">Vacantion</td>
            <td width="123">անդամ</td>
            </tr>
            <tr>
            <td width="31">8</td>
            <td width="217">Vacantion</td>
            <td width="113">Vacantion</td>
            <td width="123">անդամ</td>
            </tr>
            <tr>
            <td width="31">9</td>
            <td width="217">Vacantion</td>
            <td width="113">Vacantion</td>
            <td width="123">անդամ</td>
            </tr>
            <tr>
            <td width="31">10</td>
            <td width="217">Vacantion</td>
            <td width="113">Vacantion</td>
            <td width="123">անդամ</td>
            </tr>
            <tr>
            <td width="31">11</td>
            <td width="217">Vacantion</td>
            <td width="113">Vacantion</td>
            <td width="123">անդամ</td>
            </tr>
            <tr>
            <td width="31">12</td>
            <td width="217">Vacantion</td>
            <td width="113">Vacantion</td>
            <td width="123">անդամ</td>
            </tr>
            </tbody>
            </table>
    </div>
    <div class="mark_counter" id="mark_counter">
        <h2>Քարորդի հաշվիչ</h2>
        <p></p>
        <button onclick="{calculate()}" type="submit" id="count">Հաշվել</button>
        <p></p>
    </div>

    <div class="register">
        <h2>Գրանցվել Խմբակներին</h2>
        <form action="main.php" method="POST">
            <select name="subject">
            <option disabled selected>Ընտրեք Հարցը կամ Խմբակը</option>
                <optgroup label="Հարցեր">
                <option value="1">Հարց դպրոցից</option>
                <option value="2">Գործնական հարց</option>
                <option value="3">Անձնական հարց</option>
                <optgroup label="Խմբակներ">
                <option value="4">Դիզայն</option>
                <option value="5">Մոնտաժ</option>
                <option value="6">Ծրագրավորում</option>
                </optgroup>
            </select>
            <input id="email" type="email" name="email" placeholder="Էլ-փոստ" maxlength="50" required>
            <textarea name="message" placeholder="Գրեք հարցը կամ խմբակի մասին" maxlength="150" required></textarea>
            <input id="send" type="submit" value="Ուղարկել">
        </form>
        <hr>
    </div>
        <footer>
            <img id="arm" src="https://e-school.am/assets/img/armenianGerb.png" alt="logo"><span> ՀՀ Կրթության, գիտության, մշակույթի և սպորտի նախարարություն</span>
            <span id="span2">Վարդենիկի Արտակ Օհանյանի Անվան №2 դպրոց</span>
            <span id="span3">Կրթական տեխնոլոգիաներ ազգային կենտրոն</span>
        </footer>
    <script src="/js/index.js"></script>
</body>
</html>