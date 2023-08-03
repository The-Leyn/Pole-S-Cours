import { Component } from '@angular/core';

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})
export class PostComponent {
  titre = "Ceci est un titre"
  contenu = "Ceci est un paragraphe"
}
