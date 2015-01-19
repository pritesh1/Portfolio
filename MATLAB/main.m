clc;
clear all;


F = dir('../Circulum Vite');

% F1= dir(F(3).name);

k = zeros (5,3);
c= cell(5,1);

%%% 1 = Automobile   c{1}(1)
%%% 2 = Banking
%%% 3 = FMCG
%%% 4 = IT 
%%% 5 = POWER

 for i = 3:7
     F1= dir(F(i).name);
     cd (F(i).name)
     for j = 3:5
        load (F1(j).name);
     end
     cd ..
 end
 
 for i = 3:7
     F1= dir(F(i).name);
     cd (F(i).name);
     for j = 3:5
        c{i-2}{j-2} = load (F1(j).name);
     end
     cd ..;
 end
 
 
%%% create an output which puts all data from an arrange function into out matrix which can be used for our further purposes 
for i = 1 :5
    for j = 1:3
        out(:,:,3*(i-1)+j)=  arrange(c{i,1}{1,j});
    end
end


table = zeros(3582,16);


for j= 1:3582
    for i = 2:16
        table(j,i) =  out(j,2,i-1);
    end
end

% csvwrite('tabulations.csv',table);