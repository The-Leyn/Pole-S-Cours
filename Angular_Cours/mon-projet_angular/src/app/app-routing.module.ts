import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MonPremierComponentComponent } from './mon-premier-component/mon-premier-component.component';

const routes: Routes = [
  { path: "presence", component: MonPremierComponentComponent }
  // { path: "presence/:id", component:  }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
