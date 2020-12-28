#include <cs50.h>
#include <stdio.h>

void pyramid(int height);
void buildLeft(int height, int i);
void buildMiddle(void);
void buildRight(int height, int i);

int main(void)
{
    int height;
    do
    {
        height = get_int("Height: ");
    }
    while(height < 1 || height > 8);

    pyramid(height);
}

void pyramid(int height)
{
    for(int i = 0; i < height; i++)
    {
        buildLeft(height, i);
        buildMiddle();
        buildRight(height, i);
    }
}

void buildLeft(int height, int i) 
{
    for (int j = 0; j < height; j++)
    {
        if (j + 1 >= height - i)
        {
            printf("#");
        }
        else
        {
            printf(" ");
        }
    }
}

void buildMiddle(void) 
{
    printf("  ");
}

void buildRight(int height, int i) 
{
    for(int k = 0; k < height; k++)
    {
        if(k <= i) {
            printf("#");
        }
    }
    printf("\n");
}
