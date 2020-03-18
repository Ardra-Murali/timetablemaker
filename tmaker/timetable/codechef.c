#include <stdio.h>

int main(void) {
    int t,n,a[12]={0},p,s,sum=0,i,j;
    scanf("%d",&t);
    
    while(t>0){
        scanf("%d",&n);
    
        for(i=0;i<n;i++){
            scanf("%d",&p);
            scanf("%d",&s);
            if(a[p]>=s)
            continue;
            else
            a[p]=s;
        }
    
        for(j=0;j<9;j++){
            sum=sum+a[j];
        }
        printf("%d",sum);
        printf("\n");
        t--;
    }
	return 0;
}


