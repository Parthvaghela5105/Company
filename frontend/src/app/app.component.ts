import { Component, ViewChild } from '@angular/core';
import { AddComponent } from "./components/add/add.component";
import { ListComponent } from "./components/list/list.component";

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [AddComponent, ListComponent],
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent {
  title = 'frontend';
  @ViewChild(ListComponent) listRef!: ListComponent;

  reloadUsers() {
    this.listRef.loadUsers();
  }
}
