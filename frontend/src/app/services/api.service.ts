import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class ApiService {
  private baseUrl = 'http://localhost/backend';

  constructor(private http: HttpClient) { }

  getUsers(): Observable<any> {
    return this.http.get(`${this.baseUrl}/read.php`);
  }

  createUser(data: any): Observable<any> {
    return this.http.post(`${this.baseUrl}/create.php`, data);
  }

  updateUser(data: any): Observable<any> {
    return this.http.post(`${this.baseUrl}/update.php`, data);
  }

  deleteUser(id: number): Observable<any> {
    return this.http.get(`${this.baseUrl}/delete.php?id=${id}`);
  }
}
