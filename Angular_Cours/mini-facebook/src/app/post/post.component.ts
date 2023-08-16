import { Component, Input } from '@angular/core';

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})
export class PostComponent {
  // titre = "Ceci est un titre";
  @Input() postName: string;
  @Input() postContent: string;
  show = false;
  textTest ='';
  onClique() {
    this.show = true;
    // document.getElementById('like')?.classList.add('d-none');
    // document.getElementById('nolike')?.classList.remove('d-none');
  }
  onClique2() {
    this.show = false;
    // document.getElementById('nolike')?.classList.add('d-none');
    // document.getElementById('like')?.classList.remove('d-none');
  }
}
