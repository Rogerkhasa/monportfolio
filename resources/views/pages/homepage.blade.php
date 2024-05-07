@extends('app')

@section('title','Mon portfolio')

@section('content')
        <section class="home" id="home">
            <div class="presentation">
                <br>
                <h3>CYCLOPE-KHASA</h3>
                <h1>KHASA MBUMBA</h1>
                <h4>Développeur Informatique</h4>
            </div>
            <div class="navigation">
                <a href="#apropos" class="about aboutCompetence">A propos</a>
                <a href="#competence" class="aboutCompetence">Compétences</a>
            </div>
            <div class="social">
                <a href="https://mobile.facebook.com/kiff.khasa?eav=AfaPgfSKWs-FTVfTvokMdPqr6bhGMT0H9OlrU6tdDXs6lu6gkt9kodxF2vCEmkzBsko&paipv=0"><img class="icon-social" src="{{asset('/images/facebook.png')}}"></a>
                <a href="https://www.instagram.com/kiffkhasa/"><img class="icon-social" src="{{asset('/images/instagram.png')}}"></a>
                <a href="https://www.linkedin.com/in/roger-khasa-865b97260/"><img class="icon-social" src="{{asset('/images/linkedin.png')}}"></a>
                <a href="j"><img class="icon-social" src="{{asset('/images/pinterest.png')}}"></a>
                <a href="https://twitter.com/rogerkhasa"><img class="icon-social" src="{{asset('/images/twitter.png')}}"></a>
                <a href="https://github.com/rogerkhasa"><img class="icon-social" src="{{asset('/images/github.png')}}"></a>
                <a href="{{asset('/images/cvkhasa.pdf')}}" class="cvkhasa">Télécharger mon cv</a>
            </div>
        </section>

        <section class="apropos" id="apropos">
            <h2>A PROPOS</h2>
            <p>rogerkhasar@gmail.com</p>

            <div class="description">
            <p>
            En tant que développeur informatique , j'apporte une expertise 
            complète à tous les aspects du développement web , réseaux informatique et système d’exploitation
            de la conception initiale à l'implémentation finale. 
            Ma passion pour la résolution de problèmes et
            mon souci du détail se reflètent dans chacun de mes projets,
            et je suis constamment à la recherche de nouveaux défis stimulants. 
            </p>
            
            <img src="{{asset('/images/moi2.png')}} " alt="" width="396px">
            </div>
        </section>


        <section class="competence" id="competence">
            

            <div class="icon-competence">
                <div class="left">
                    <h2>COMPETENCES </h2>
                    <div>
                        <img src="{{asset('/images/html.png')}}" alt="">
                        <img src="{{asset('/images/css.png')}}" alt="">
                        <img src="{{asset('/images/js.png')}}" alt="">
                        <img src="{{asset('/images/php.png')}}" alt="">
                    </div>
                    <div>
                        <img src="{{asset('/images/python.png')}}" alt="">
                        <img src="{{asset('/images/laravel.png')}}" alt="">
                    </div>
                    <div>
                    <img src="{{asset('/images/boostrap.png')}}" alt="" class="bootstrap">
                    </div>
                </div>

                <div class="right">
                    <h2>COMPETENCES LOGICIELS</h2>
                    <div>
                        <img src="{{asset('/images/excel.png')}}" alt="">
                        <img src="{{asset('/images/word.png')}}" alt="">
                        <img src="{{asset('/images/powerpoint.png')}}" alt="">
                        <img src="{{asset('/images/photoshop.png')}}" alt="">
                        <img src="{{asset('/images/figma.png')}}" alt="">
                    </div>
                </div>
            </div>
        

        </section>
        
        <section class="contact" id="contact">
            <h2>Contactez-moi</h2>
            <form method="POST">
                @csrf
                <div class="inputs">
                    <div class="identity">
                        <input type="text" name="name" id="" placeholder="Votre nom" required>
                        <input type="email" name="email" id="" placeholder="Votre email" required>
                    </div>
                    <div class="message">
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message" required></textarea>
                    </div>
                    <div class="btn">
                        <input type="submit" value="Envoyer" id="send">
                    </div>
                </div>
            </form>
        </section>

        <section>
            <footer>
                <i>KHASA Copyright 2024</i>
            </footer>
        </section>
@endsection