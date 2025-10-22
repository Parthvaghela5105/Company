import { Component, Output, EventEmitter } from '@angular/core';
import { ApiService } from '../../services/api.service';
import { FormsModule } from '@angular/forms';
import { CommonModule } from '@angular/common';

@Component({
  selector: 'app-add',
  standalone: true,
  imports: [FormsModule, CommonModule],
  templateUrl: './add.component.html',
  styleUrls: ['./add.component.css']
})
export class AddComponent {
  user = { name: '', email: '', phone: '' };
  @Output() userAdded = new EventEmitter<void>();

  constructor(private api: ApiService) {}

  addUser() {
    console.log("User is created");
    
    this.api.createUser(this.user).subscribe({
      next: () => {
        alert('User Added!');
        this.user = { name: '', email: '', phone: '' };
        this.userAdded.emit();
      },
      error: (err) => console.error('Error:', err)
    });
  }
}
