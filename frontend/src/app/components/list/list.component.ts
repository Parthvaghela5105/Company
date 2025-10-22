import { Component, OnInit } from '@angular/core';
import { ApiService } from '../../services/api.service';
import { CommonModule} from '@angular/common';
import { FormsModule } from '@angular/forms';

@Component({
  selector: 'app-list',
  standalone: true,
  imports: [CommonModule , FormsModule],
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.css']
})
export class ListComponent implements OnInit {
  users: any[] = [];
  editMode = false;
  selectedUser = { id: null, name: '', email: '', phone: '' };

  constructor(private api: ApiService) {}

  ngOnInit() {
    this.loadUsers();
  }

  loadUsers() {
    this.api.getUsers().subscribe((res) => (this.users = res));
  }

  deleteUser(id: number) {
    this.api.deleteUser(id).subscribe(() => this.loadUsers());
  }

  editUser(user: any) {
    this.editMode = true;
    this.selectedUser = { ...user }; 
  }

  updateUser() {
    this.api.updateUser(this.selectedUser).subscribe(() => {
      alert('User Updated!');
      this.editMode = false;
      this.selectedUser = { id: null, name: '', email: '', phone: '' };
      this.loadUsers();
    });
  }
}
