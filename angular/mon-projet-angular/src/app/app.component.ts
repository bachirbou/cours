import { Component } from '@angular/core';
import { DataService } from './data.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {

  title = 'mon-projet-angular';
  isAuth= true;
  onClique() {
    alert('Cliqué !');
  }
  persoOne = 'Adrien';
  persoTwo =  'Guillaume';
  persoThree = 'Stephane';
  Present = 'Présent';
  Absent = 'Absent';
  presenceTab: any[];


  constructor(private dataservice:DataService) {}
  ngOnInit(){
    this.presenceTab = this.dataservice.presenceTab;
  }

}
