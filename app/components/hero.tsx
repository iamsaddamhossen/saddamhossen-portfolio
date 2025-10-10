import Image from "next/image";
export function Hero() {
  return (
    <div className="mb-4">
      <h1 className="font-bold text-2xl mb-2">Hi, I am Saddam</h1>
      <p className="mb-4">
        A freelance WordPress developer. I have been so fortunate to build a
        career on top of WordPress. I’ve contributed what I can to help the
        WordPress community that has helped me so much.{" "}
      </p>

      <Image
        src="/hero.webp"
        width={1100}
        height={102}
        quality={70}
        alt="WordPress Developer"
        placeholder="blur"
        blurDataURL="/hero-placeholder.png"
        loading="eager"
      />
    </div>
  );
}
