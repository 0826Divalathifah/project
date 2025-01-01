#include <iostream>
#include <conio.h>

using namespace std;

int main(){
	int a;
	float ppa,asd,pti,pai,komgraf,pkn,bhs_inggris,digital_ent,etika_prof,ip,jmlh_sks,IP;
	string nama,nim;
	
	cout<<"Masukkan Nama Mahasiswa	:";
	cin>>a;
	system("color d");
	
	for(int i=1; i<=a; i++ ) {
	
	cout<< "Mahasisiwa Ke-"<<i <<endl;
	
	cout<<"******************************************"<<endl;
	cout<<"		PROGRAM MENGHITUNG IP SEMESTER 1     "<<endl;
	cout<<"******************************************"<<endl;
	cout<<"Nama Mahasiswa				:			 "<<endl;
	cout<<"NIM							:			 "<<endl;
	cout<<"------------------------------------------"<<endl;
	
	
	cout<<"Nilai ASD					:";
	cin>>asd;
	cout<<"Nilai PPA					:";
	cin>>ppa;
	cout<<"Nilai PTI					:";
	cin>>pti;
	cout<<"Nilai PAI					:";
	cin>>pai;
	cout<<"Nilai KOMGRAF				:";	
	cin>>komgraf;
	cout<<"Nilai PKN					:";
	cin>>pkn;
	cout<<"Nilai B.INGGRIS				:";
	cin>>bhs_inggris;
	cout<<"DIGITAL ENTP					:";
	cin>>digital_ent;
	cout<<"ETIKA PROFESI				:";
	cin>>etika_prof;
	cout<<"--------------------------------------------"<<endl;
	cout<<" JUMLAH SKS					:";
	cin>>jmlh_sks;
	cout<<"--------------------------------------------"<<endl;
	IP=(ppa+asd+pti+pai+komgraf+pkn+bhs_inggris+digital_ent+etika_prof+jmlh_sks)/22;
	cout<<"IP Mahasiswa dengan nama "<<nama<<"nim"<<nim<<":"<<IP;
	
	getch();
	
	}
}