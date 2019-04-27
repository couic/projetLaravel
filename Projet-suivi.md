# Projet Laravel - Suivi

## 2

Rappel :
- Les  routes  (  =  comment  traiter  les  URLs  demandées  par  un  visiteur  du  blog  )  sont gérées dans le fichier `routes/web.php` 
- Les contrôleurs seront placés dans le répertoire `app/Http/Controllers/` 
- Les modèles sont placés où vous voulez, par défaut dans le répertoire `app/` 
- Les vues sont placées dans le répertoire `resources/views/`

### 2.2

- Utiliser le code blade suivant: `​@extends​(​'layouts/main'​)`​ pour déclarer que votre vue doit utiliser ce layout 
- Déclarer une section blade: 
```html
@section​(​'content'​)
    <​h1​>​Home​</​h1​>
@endsection
```
Cette section content​ sera affichée dans le fichier layout à l’endroit où est placé le code: `​@yield​(​'content'​)` 

### 4.2

À partir de maintenant, il va être possible de récupérer l’auteur d’un post ou bien les posts d’un utilisateur très facilement (dans les controllers) :
```php
$​ post​ ​ = ​ \App\​ Post::​ find​ ( ​ 1 ​ ); //trouver le post avec l’id 1
echo​ ​ $ ​ post-​ > ​ author-​ > ​ name​ ; //affiche le nom de l’auteur
$​ users​ ​ = ​ \App\​ User::​ find​ ( ​ 1 ​ ) ​ ->​ posts​ ; ​ //get posts from user id 1
foreach​ (​ $ ​ posts​ ​ as​ ​ $ ​ post​ ) {
//loop on posts
```

## TODO
- `main.blade.php` : l. 15-16 com à supprimer
- `article.blade.php` : <p>{{ $post->post_author }}</p> afficher nom auteur
- `welcome.blade.php` : afficher les trois derniers articles au lieu des trois premiers