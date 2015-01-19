function [ Product ] = arrange( company )
%FUNCTION to fill in the missing values and return the output

k= zeros(3582,2);

company(:,4);

sz = size(company);

for i = 1 : 3582      
    k(i,1)=i;
    k(i,2)= NaN;
end

for i = 1 : 3582
    for j = 1: sz(1)
        if (company(j,4)== i)
            k(i,2) = company(j,2); 
        end
    end
end

for i = 1 : 3582
    if isnan(k(i,2))
        k(i,2)= k(i-1,2);
    end
end


Product = k;

end


