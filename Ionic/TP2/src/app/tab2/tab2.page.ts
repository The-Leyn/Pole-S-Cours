import { Component } from '@angular/core';

@Component({
  selector: 'app-tab2',
  templateUrl: 'tab2.page.html',
  styleUrls: ['tab2.page.scss']
})
export class Tab2Page {

  constructor() {}
  cardTab = [
    {
      title : 'Miami Beach',
      subtitle: 'DESTINATION FLORIDE, US',
      imgSrc : '../../assets/images/plage.jpeg'
    },
    {
      title : 'Camping',
      subtitle: 'DESTINATION CAMPING, CANADA',
      imgSrc : '../../assets/images/camping.jpeg'
    },
    {
      title : 'Barbecue',
      subtitle: 'DESTINATION BARBECUE, FRANCE',
      imgSrc : '../../assets/images/barbecue.jpeg'
    }
  ]

}
