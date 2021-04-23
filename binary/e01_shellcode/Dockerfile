FROM centos:7
ENV FLAG th1515sup3rs3cr3t
COPY exercise.c Makefile /root/
WORKDIR /root/
RUN yum groupinstall "Development Tools" -y
RUN yum install socat -y
RUN echo {dummyflag} > /flag
RUN make bin
ENTRYPOINT while true; do socat TCP-LISTEN:5555,fork,reuseaddr, exec:"/root/exercise",stderr; sleep 1; done
