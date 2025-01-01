#include<iostream>
#include<conio.h>

using namespace std;

int main(){
	 typedef int matrix[3][2];
	 matrix N;
	 
	 int y,z,a,b,cari,hps1,hps2;
	 
	 cout<<"	Penggabungan Materi ARRAY 2 Dimensi"<<endl;
	 cout<<"==============================================\n";
	 
	 /** input Matrix N **/
	 cout<< endl << "*Inputan sebuah data* : \n";
	 for (int b=0; b<3; b++){
	 	for(int k=0; k<2; k++){
	 		cout<<"N ["<<b<<"]["<<k<<"] = ";
	 		cin>>N[b][k];
		 }
	 }
	 cout<<endl;
	 
	 /** output Matrix N **/
	 cout<< endl << "*Menampilkan sebuah data*  ";
	 cout << endl<< "Matrix N \n";
	 for(int b=0; b<3; b++){
	 	for(int k=0; k<2; k++){
	 		cout<<" " <<N[b][k];
		 }
		 cout<<endl;
	 }
	 
	 /** Mengedit data **/
	 cout << endl << "*Mengedit sebuah data*  \n";
	 
	 cout<<"Data YAng Lama : \n";
	 for(int b=0; b<3; b++){
	 	for(int k=0; k<2; k++){
	 		cout<<" " <<N[b][k];
		 }
		 cout<<endl;
	 }
	 
	 cout<<"Masukkan data baru"<<endl;
	 cout<<"Data yang baru : \n";
	 for(int i=0; i<3; i++){
	 	for(int n=0; n<2; n++){
	 		cout<<"N["<<i<<"]["<<n<<"] = ";cin>>N[i][n];
		 }
	 }
	 
	 /** Tampilan Data Baru **/
	 cout<<"Tampilan Data Baru : \n";
	 for(int i=0; i<3; i++){
	 	for(int n=0; n<2; n++){
	 		cout<<N[i][n]<<" ";
		 }
		 cout<<endl;
	 }
	 
	 /** Mencari Nilai Array 2 Dimensi **/
	 cout<<"\n*Mencari Nilai* = ";cin>>cari;
	 for(int i=0; i<3; i++){
	 	for(int n=0;n<2;n++){
	 		if (cari==N[i][n]){
	 			cout<<"Nilai yang dicari "<<cari<<" Terdapat pada index ke- ["<<i<<"]["<<n<<"]"<<endl;
			 }
		 }
		 cout<<endl;
	 }
	 
	 /** Menghapus Data Array 2 Dimensi **/
	 cout<<"*Menghapus Data Baru*  \n";
	 cout<<"Tampilan Data Baru : \n";
	 for(int i=0; i<3; i++){
	 	for(int n=0; n<2;n++){
	 		cout<<N[i][n]<<" ";
		 }
		 cout<<endl;
	 }
	 
	 cout<<"Hapus Data Baris ke- = ";cin>>hps1;
	 cout<<"Hapus Data Kolom ke- = ";cin>>hps2;
	 cout<<"Matrix Berubah Jadi Seperti ini : "<<endl;
	 for(int i=hps1;i<3;i++){
	 	for(int n=hps2;n<2;n++){
	 		N[i][n]=N[i][n];
		 }
	   	 }
		 for(int i=0;i<3;i++){
		 	for(int n=0;n<2;n++){
		 		if(i==hps1 && n==hps2){continue;}
		 		
		 	cout<<N[i][n]<<" ";
			 }
			 cout<<endl;
		 }
		 
	
	getch();
}
	 
	 

	